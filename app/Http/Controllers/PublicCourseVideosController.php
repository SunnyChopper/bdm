<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourseVideo;

class PublicCourseVideosController extends Controller
{
    public function create(Request $data) {
    	$video = new PublicCourseVideo;
    	$video->title = $data->title;
    	$video->description = $data->description;
    	$video->video_url = $data->video_url;
    	$video->question = $data->question;

    	if (isset($data->subscribe_url)) {
    		$video->subscribe_url = $data->subscribe_url;
    	}

    	$video->save();

    	return redirect()->back();
    }

    public function read($video_id) {
    	$video = PublicCourseVideo::find($video_id);

    	$page_title = $video->title;
    	$page_header = $page_title;

    	return view('members.public-courses.view-video')->with('video', $video)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function update(Request $data) {
    	$video = PublicCourseVideo::find($data->video_id);
    	$video->title = $data->title;
    	$video->description = $data->description;
    	$video->video_url = $data->video_url;
    	$video->question = $data->question;

    	if (isset($data->subscribe_url)) {
    		$video->subscribe_url = $data->subscribe_url;
    	}

    	$video->save();

    	return redirect()->back();
    }

    public function delete(Request $data) {
    	$video = PublicCourseVideo::find($data->video_id);
    	$video->is_active = 0;
    	$video->save();

    	return redirect()->back();
    }
}
