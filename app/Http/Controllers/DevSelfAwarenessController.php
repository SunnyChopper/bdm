<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\DevSAResultsHelper;
use App\Custom\DevSelfAwarenessResourceHelper;

use Auth;

class DevSelfAwarenessController extends Controller
{
    public function index() {
    	if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

    	// Dynamic page elements
    	$page_title = "Developer Self Awareness Tool";
    	$page_header = $page_title;

    	return view('members.dev-sa.index')->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function results(Request $data) {
    	if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

    	// Dynamic page elements
    	$page_title = "Quiz Results";
    	$page_header = $page_title;

    	// TODO: Create algorithm to determine main category and secondary category
    	$main_category = "Front-End Developer";
    	$secondary_category = "UI Designer";

    	// Get the results
    	$resource_helper = new DevSelfAwarenessResourceHelper();
    	$resources = $resource_helper->get_all_with_categories($main_category, $secondary_category);

    	// Save results
    	$user_id = Auth::id();
    	$sa_results_helper = new DevSAResultsHelper();
    	$result_data = array(
    		"user_id" => $user_id,
    		"main_category" => $main_category,
    		"secondary_category" => $secondary_category
    	);

    	return view('members.dev-sa.results')->with('page_header', $page_header)->with('page_title', $page_title)->with('resources', $resources);
    }

    public function get_past_results() {
    	if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

    	// Dynamic page elements
    	$page_title = "Past Results";
    	$page_header = $page_title;

    	// Get results
    	$user_id = Auth::id();
    	$sa_results_helper = new DevSAResultsHelper();
    	$results = $sa_results_helper->get_all_for_user($user_id);

    	return view('members.dev-sa.past-results')->with('page_title', $page_title)->with('page_header', $page_header)->with('results', $results);
    }

    public function get_resources($main_category, $secondary_category) {
    	if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

    	// Dynamic page elements
    	$page_title = "Resources for " . $main_category;
    	$page_header = $page_title;

    	// Get resources
    	$resource_helper = new DevSelfAwarenessResourceHelper();
    	$resources = $resource_helper->get_all_with_categories($main_category, $secondary_category);

    	return view('members.dev-sa.resources')->with('page_title', $page_title)->with('page_header', $page_header)->with('resources', $resources);
    }

    private function redirect_guest() {
    	if (Auth::guest()) {
    		return 1;
    	} else {
    		return 0;
    	}
    }
}
