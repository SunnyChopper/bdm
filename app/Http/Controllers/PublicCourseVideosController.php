<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourseVideo;
use App\PublicCourse;

class PublicCourseVideosController extends Controller
{

    public function new($public_course_id) {
        $course = PublicCourse::find($public_course_id);

        $page_title = "New Course Content";
        $page_header = $page_title;

        return view('admin.public-courses.course-videos.new')->with('course', $course)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function create(Request $data) {
    	$video = new PublicCourseVideo;
        $video->course_id = $data->course_id;
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

    public function view_all($public_course_id) {
        $videos = PublicCourseVideo::where('course_id', $public_course_id)->get();
        $course = PublicCourse::find($public_course_id);

        $page_title = "Course Videos";
        $page_header = $page_title;

        return view('admin.public-courses.course-videos.view')->with('videos', $videos)->with('page_title', $page_title)->with('page_header', $page_header)->with('course', $course);
    }

    public function read($video_id) {
    	$video = PublicCourseVideo::find($video_id);

    	$page_title = $video->title;
    	$page_header = $page_title;

    	return view('members.public-courses.view-video')->with('video', $video)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function edit($public_course_id, $video_id) {
        $video = PublicCourseVideo::find($video_id);

        $page_title = "Edit Course Content";
        $page_header = $page_title;

        return view('admin.public-courses.course-videos.edit')->with('video', $video)->with('page_title', $page_title)->with('page_header', $page_header);
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
