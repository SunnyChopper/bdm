<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourse;

class PublicCoursesController extends Controller
{
    public function create(Request $data) {
    	$public_course = new PublicCourse;
    	$public_course->title = $data->title;
    	$public_course->description = $data->description;

    	if (isset($data->image_url)) {
    		$public_course->image_url = $data->image_url;
    	}

    	if (isset($data->video_url)) {
    		$public_course->video_url = $data->video_url;
    	}

    	$public_course->save();

    	return redirect(url('/admin/public-courses/view'));
    }

    public function read($public_course_id) {
    	$public_course = PublicCourse::find($public_course_id);

    	$page_title = $public_course->title;
    	$page_header = $page_title;

    	return view('pages.view-public-course')->with('course', $course)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function update(Request $data) {
    	$public_course = PublicCourse::find($data->public_course_id);
    	$public_course->title = $data->title;
    	$public_course->description = $data->description;

    	if (isset($data->image_url)) {
    		$public_course->image_url = $data->image_url;
    	}

    	if (isset($data->video_url)) {
    		$public_course->video_url = $data->video_url;
    	}

    	$public_course->save();

    	return redirect(url('/admin/public-courses/view'));
    }

    public function delete(Request $data) {
    	$public_course = PublicCourse::find($data->public_course_id);
    	$public_course->is_active = 0;
    	$public_course->save();

    	return redirect(url('/admin/public-courses/view'));
    }
}
