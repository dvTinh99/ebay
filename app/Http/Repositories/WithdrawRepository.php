<?php

namespace App\Http\Repositories;

use App\Http\Repositories\BaseRepository;
use App\Models\Order;
use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PSpell\Config;

class WithdrawRepository extends BaseRepository
{
    public function getModel()
    {
        return Withdraw::class;
    }

    public function createWithDraw($data) {
        $user = User::find($data['user_id']);
        $withDraw = $data['withdraw'];

        if ($user->wallet < $withDraw) {
            return [
                'message' => 'Số tiền còn lại không đủ',
                'success' => false
            ];
        }

        $user->wallet -= $withDraw;
        $user->save();
        return $this->create($data);
    }

    public function approveWithDraw($id, $note) {
        $withDraw = Withdraw::find($id);
        $withDraw->status = Config('withdraw.approve');
        $withDraw->master_note = $note;
        $withDraw->save();
        return $withDraw;
    }

    public function rejectWithDraw($id, $note) {
        $withDraw = Withdraw::find($id);
        $withDraw->status = Config('withdraw.reject');
        $withDraw->master_note = $note;

        $user = $withDraw->user;
        $user->wallet += $withDraw->withdraw;
        $user->save();

        $withDraw->save();

        return $withDraw;
    }

    public function myWithdraw() {
        return Auth::user()->withdraws;
    }

    public function getAll() {
        return $this->model->with('user')->get();
    }

    public function detail($id) {
        return $this->model->with('user')->where('id', $id)->first();
    }

}
