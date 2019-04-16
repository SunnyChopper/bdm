<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\PublicCourse;
use App\PublicCourseForum;
use App\PublicCourseForumComment;

class PublicCourseForumsController extends Controller
{

    public function new($public_course_id) {
        $course = PublicCourse::find($public_course_id);

        $page_title = "Create New Forum";
        $page_header = $page_title;

        return view('members.public-courses.forums.new')->with('course', $course)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function create(Request $data) {
    	$forum = new PublicCourseForum;
    	$forum->course_id = $data->course_id;
    	$forum->user_id = Auth::id();
    	$forum->title = $data->title;
    	$forum->description = $data->description;
    	$forum->save();

    	return redirect(url('/members/public-courses/' . $data->course_id . '/forums/' . $forum->id));
    }

    public function view_all($public_course_id) {
        $course = PublicCourse::find($public_course_id);
        $forums = PublicCourseForum::where('course_id', $public_course_id)->where('is_active', 1)->paginate(25);
        $page_title = "All Course Forums";
        $page_header = $page_title;
        return view('members.public-courses.view-forums')->with('forums', $forums)->with('page_title', $page_title)->with('page_header', $page_header)->with('course', $course);
    }

    public function read($public_course_id, $forum_id) {
        $course = PublicCourse::find($public_course_id);
    	$forum = PublicCourseForum::find($forum_id);
        $comments = PublicCourseForumComment::where('forum_id', $forum_id)->where('is_active', 1)->get();
        $forums = PublicCourseForum::where('course_id', $public_course_id)->where('is_active', 1)->limit(5)->get();

    	$page_title = $forum->title;
    	$page_header = $page_title;

    	return view('members.public-courses.forums.view')->with('forum', $forum)->with('page_title', $page_title)->with('page_header', $page_header)->with('comments', $comments)->with('course', $course)->with('forums', $forums);
    }

    public function delete(Request $data) {
    	$forum = PublicCourseForum::find($data->forum_id);
    	$forum->is_active = 0;
    	$forum->save();

    	return redirect(url('/members/public-courses/' . $data->course_id . '/forums/'));
    }
}
