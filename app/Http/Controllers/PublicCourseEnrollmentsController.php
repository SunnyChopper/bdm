<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicCourseEnrollment;

class PublicCourseEnrollmentsController extends Controller
{
    public function create(Request $data) {
    	$enrollment = new PublicCourseEnrollment;
    	$enrollment->course_id = $data->course_id;
    	$enrollment->user_id = $data->user_id;
    	$enrollment->save();

    	return redirect(url('/members/public-courses/view/' . $data->course_id));
    }

    public function delete(Request $data) {
    	$enrollment = PublicCourseEnrollment::find($data->enrollment_id);
    	$enrollment->is_active = 0;
    	$enrollment->save();

    	return redirect(url('/members/public-courses'));
    }
}
