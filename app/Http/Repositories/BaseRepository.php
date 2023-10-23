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

            $this->addColumnCondition($query, $column, $operator, $value);
        }

        return $query;
    }

    protected function addColumnCondition($query, $column, $operator, $value) {
        if (strpos($column, '.') === false) {
            if ($operator === 'between') {
                $query->whereBetween($column, $value);
            } else {
                $query->where($column, $operator, $value);
            }
        } else {
            $parts = explode('.', $column);

            $relation = implode('.', array_slice($parts, 0, -1));
            $column = end($parts);

            $query->whereHas($relation, function ($query) use ($column, $operator, $value) {
                if ($operator === 'between') {
                    $query->whereBetween($column, $value);
                } else {
                    $query->where($column, $operator, $value);
                }
            });
        }
    }

    // count bases on wheres
    public function count($conditions = []) {
        $query = $this->model->query();
        return $this->wheres($query, $conditions)->count();
    }
}
