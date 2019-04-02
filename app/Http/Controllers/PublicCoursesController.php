<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourseVideo;
use App\PublicCourse;

class PublicCoursesController extends Controller
{
    public function new() {
        $page_title = "Create New Public Course";
        $page_header = $page_title;

        return view('admin.public-courses.courses.new')->with('page_title', $page_title)->with('page_header', $page_header);
    }

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

    public function course_dashboard($public_course_id) {
        $course = PublicCourse::find($public_course_id);
        $videos = PublicCourseVideo::where('course_id', $public_course_id)->get();

        $page_title = $course->title;
        $page_header = $page_title;

        return view('members.public-courses.dashboard')->with('course', $course)->with('videos', $videos)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function view_all() {
        $courses = PublicCourse::where('is_active', 1)->get();

        $page_title = "Public Courses";
        $page_header = $page_title;

        return view('admin.public-courses.courses.view')->with('courses', $courses)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function read($public_course_id) {
    	$course = PublicCourse::find($public_course_id);

    	$page_title = $course->title;
    	$page_header = $page_title;

    	return view('pages.view-public-course')->with('course', $course)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function edit($public_course_id) {
        $course = PublicCourse::find($public_course_id);

        $page_title = "Edit Public Course";
        $page_header = $page_title;

        return view('admin.public-courses.courses.edit')->with('course', $course)->with('page_title', $page_title)->with('page_header', $page_header);
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
