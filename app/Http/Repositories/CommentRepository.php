<?php

namespace App\Http\Repositories;
use App\Models\Comments;

class CommentRepository extends BaseRepository
{
    public function getModel(): string {
        return Comments::class;
    }

    // get all by user_id, with user and replies, order by created_at desc
    public function getCommentsForSeller($seller_id)
    {
        return $this->model
            ->where('seller_id', $seller_id)
            ->whereNull('parent_id')
            ->with(['seller', 'replies', 'product' => function ($query) {
                $query->with('images');
            }])
            ->orderBy('created_at', 'desc')
            ->get();
    }

    // getConversation
    public function getConversation($id)
    {
        return $this->model
            ->where('id', $id)
            ->with(['seller', 'replies', 'product' => function ($query) {
                $query->with('images');
            }])
            ->first();
    }
}
