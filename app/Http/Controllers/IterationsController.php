<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Iteration;
use App\IterationEnrollment;
use Illuminate\Http\Request;

class IterationsController extends Controller
{
    public function create_iteration(Request $data) {
    	$i = new Iteration;
    	$i->user_id = Auth::id();
    	$i->title = $data->title;
    	$i->description = $data->description;
    	$i->hypothesis = $data->hypothesis;
    	$i->action = $data->action;
    	$i->observation = $data->observation;
    	$i->lesson = $data->lesson;
    	$i->outcome = $data->outcome;
    	$i->save();

    	return redirect(url('/members/iterations'));
    }

    public function read_iteration($i_id) {
    	$i = Iteration::find($i_id);
    	$page_title = $i->title;
    	$page_header = $page_header;
    	return view('members.iterations.view')->with('iteration', $i)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function update_iteration(Request $data) {
    	$i = Iteration::find($data->i_id);
    	$i->title = $data->title;
    	$i->description = $data->description;
    	$i->hypothesis = $data->hypothesis;
    	$i->action = $data->action;
    	$i->observation = $data->observation;
    	$i->lesson = $data->lesson;
    	$i->outcome = $data->outcome;
    	$i->save();

    	return redirect(url('/members/iterations'));
    }

    public function delete_iteration(Request $data) {
    	$i = Iteration::find($data->i_id);
    	$i->status = 0;
    	$i->save();

    	return redirect(url('/members/iterations'));
    }

    public function create_iteration_enrollment(Request $data) {
    	$enrollment = new IterationEnrollment;
    	$enrollment->user_id = Auth::id();
    	$enrollment->next_payment_date = Carbon::now()->addMonth();
    	// TODO: Function to charge customer
    	$enrollment->save();

    	return redirect(url('/members/iterations'));
    }

    public function read_iteration_enrollment($ie_id) {
    	$enrollment = IterationEnrollment::find($ie_id);
    	$page_title = "Iterations Tool Enrollment";
    	$page_header = $page_title;
    	return view('members.enrollments.view')->with('enrollment', $enrollment)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function update_iteration_enrollment(Request $data) {
    	$enrollment = IterationEnrollment::find($data->ie_id);
		$enrollment->next_payment_date = $data->next_payment_date;
		$enrollment->save();

    	return redirect(url('/members/enrollments'));
    }

    public function delete_iteration_enrollment(Request $data) {
    	$enrollment = IterationEnrollment::find($data->ie_id);
    	$enrollment->status = 0;
    	$enrollment->save();

    	return redirect(url('/members/enrollments'));
    }
}
