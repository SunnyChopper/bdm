<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourseComment;

class PublicCourseVideoCommentsController extends Controller
{
    public function create(Request $data) {
    	$comment = new PublicCourseComment;
    	$comment->user_id = $data->user_id;
    	$comment->video_id = $data->video_id;
    	$comment->comment = $data->comment;
    	$comment->save();
    }

    public function delete(Request $data) {
    	$comment = PublicCourseComment::find($data->comment_id);
    	$comment->is_active = 0;
    	$comment->save();

    	return redirect()->back();
    }
}
