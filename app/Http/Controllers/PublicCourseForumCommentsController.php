<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourseForumComment;

class PublicCourseForumCommentsController extends Controller
{
    public function create(Request $data) {
    	$comment = new PublicCourseForumComment;
    	$comment->forum_id = $data->forum_id;
    	$comment->user_id = $data->user_id;
    	$comment->comment = $data->comment;
    	$comment->save();
    }

    public function delete(Request $data) {
    	$comment = PublicCourseForumComment::find($data->comment_id);
    	$comment->is_active = 0;
    	$comment->save();
    }
}
