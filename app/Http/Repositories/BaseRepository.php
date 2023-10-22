<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepositoryInterface;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {

        return $this->model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function beginTransaction()
    {
        return DB::beginTransaction();
    }

    public function commit()
    {
        return DB::commit();
    }

    public function rollBack()
    {
        return DB::rollBack();
    }

    public function wheres($query, $conditions = []) {
        foreach ($conditions as $condition) {
            $column = $condition['column'];
            $operator = $condition['operator'];
            $value = $condition['value'];

            // If the column has a '.', it means that it is a relation's column.
            if (strpos($column, '.') !== false) {
                $this->addHasCondition($query, $column, $operator, $value);
            } else {
                $query->where($column, $operator, $value);
            }
        }
        // dd($conditions);
        return $query;
    }

    protected function addHasCondition($query, $column, $operator, $value, $relation = null)
    {
        $parts = explode('.', $column, 2);

        // If a deeper relationship exists, the function is called recursively
        if (count($parts) > 1) {
            $relation = $relation ? $relation . '.' . $parts[0] : $parts[0];
            $this->addHasCondition($query, $parts[1], $operator, $value, $relation);
            return;
        }

        if($relation){ // Nested relation exists, use whereHas
            $query->whereHas($relation, function($q) use ($operator, $parts, $value){
                $q->where($parts[0], $operator, $value);
            });
        } else { // No relation exists, it's a direct attribute of the model so use where
            $query->where($parts[0], $operator, $value);
        }
    }

    // count bases on wheres
    public function count($conditions = []) {
        $query = $this->model->query();

//         $this->wheres($query2, $conditions)->get();
        return $this->wheres($query, $conditions)->count();
    }
}
