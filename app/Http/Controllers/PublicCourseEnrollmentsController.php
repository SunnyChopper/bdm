<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\PublicCourseEnrollment;

class PublicCourseEnrollmentsController extends Controller
{
    public function create($public_course_id) {
    	$enrollment = new PublicCourseEnrollment;
    	$enrollment->course_id = $public_course_id;
    	$enrollment->user_id = Auth::id();
    	$enrollment->save();

    	return redirect(url('/members/public-courses/view/' . $public_course_id));
    }

    public function delete(Request $data) {
    	$enrollment = PublicCourseEnrollment::find($data->enrollment_id);
    	$enrollment->is_active = 0;
    	$enrollment->save();

    	return redirect(url('/members/public-courses'));
    }
}
