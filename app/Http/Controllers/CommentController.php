<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CommentRepository;

class CommentController extends Controller
{

    // repo
    public $commentRepo;

    // constructor
    public function __construct(CommentRepository $commentRepo) {
        $this->commentRepo = $commentRepo;
    }

    // get by current user or query.user_id
    public function getAll()
    {
        $seller_id = request()->query('seller_id');
        $comments = $this->commentRepo->getCommentsForSeller($seller_id);
        $comments = $comments->map(function ($comment) {
            if ($comment->product) {
                // pluck images.image_link to images
                // unset images first and then set images
                $images = $comment->product->images->pluck('image_link');
                unset($comment->product->images);
                $comment->product->images = $images;
            }
            return $comment;
        });

        return $this->sendJsonResponse($comments, 'success');
    }

    // get conversation by id
    public function getConversation()
    {
        $id = request()->query('id');
        $conversation = $this->commentRepo->getConversation($id);
        if ($conversation->product) {
            // pluck images.image_link to images
            $images = $conversation->product->images->pluck('image_link');
            unset($conversation->product->images);
            $conversation->product->images = $images;
        }
        return $this->sendJsonResponse($conversation, 'success');
    }

    // add comment or reply. if parent_id is null, it's a comment, else it's a reply
    public function create()
    {
        $comment = $this->commentRepo->create(request() -> all());
        if ($comment) {
            return $this->sendJsonResponse($comment, 'success');
        }
        return $this->sendJsonError($comment, 'error');
    }

}
