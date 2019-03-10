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

    	// Determine category
        $j = 1;
        $results_array = array(
            "Frontend Developer" => 0,
            "Backend Developer" => 0,
            "Data Architect" => 0,
            "Network Engineer" => 0,
            "Data Analytics" => 0
        );
        for($i = 1; $i <= 25; $i++) {
            $question_number = "question_" . $i;
            switch($j) {
                case 1:
                    $value = $data->$question_number;
                    $results_array["Frontend Developer"] = $results_array["Frontend Developer"] + intval($value);
                    $j++;
                    break;
                case 2:
                    $value = $data->$question_number;
                    $results_array["Backend Developer"] = $results_array["Backend Developer"] + intval($value);
                    $j++;
                    break;
                case 3:
                    $value = $data->$question_number;
                    $results_array["Data Architect"] = $results_array["Data Architect"] + intval($value);
                    $j++;
                    break;
                case 4:
                    $value = $data->$question_number;
                    $results_array["Network Engineer"] = $results_array["Network Engineer"] + intval($value);
                    $j++;
                    break;
                case 5:
                    $value = $data->$question_number;
                    $results_array["Data Analytics"] = $results_array["Data Analytics"] + intval($value);
                    $j = 0;
                    break;
            }
        }
        arsort($results_array);
    	reset($results_array);
        $category = key($results_array);

    	// Get the results
    	$resource_helper = new DevSelfAwarenessResourceHelper();
    	$resources = $resource_helper->get_all_with_category($category);

    	// Save results
    	$user_id = Auth::id();
    	$sa_results_helper = new DevSAResultsHelper();
    	$result_data = array(
    		"user_id" => $user_id,
    		"category" => $category
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

    public function get_resources($category) {
    	if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

    	// Dynamic page elements
    	$page_title = "Resources for " . $category;
    	$page_header = $page_title;

    	// Get resources
    	$resource_helper = new DevSelfAwarenessResourceHelper();
    	$resources = $resource_helper->get_all_with_category($category);

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
