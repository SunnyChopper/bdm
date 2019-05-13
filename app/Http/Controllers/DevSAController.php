<?php

namespace App\Http\Controllers;

use App\DevSARecommendation;
use App\DevSAUserRecommendation;
use App\DevSARecommendationQuestion;
use App\DevSARecommendationLink;
use Illuminate\Http\Request;

class DevSAController extends Controller
{
    public function create_recommendation(Request $data) {
    	$r = new DevSARecommendation;
    	$r->title = $data->title;
    	$r->description = $data->description;
    	$r->save();

    	return redirect(url('/admin/dev-sa/recommendations'));
    }

    public function read_recommendation($r_id) {
    	$r = DevSARecommendation::find($r_id);
    	$page_title = $r->title;
    	$page_header = $page_title;
    	return view('pages.view-dev-sa-recommendation')->with('recommendation', $r)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function update_recommendation(Request $data) {
    	$r = DevSARecommendation::find($data->recommendation_id);
    	$r->title = $data->title;
    	$r->description = $data->description;
    	$r->save();

    	return redirect(url('/admin/dev-sa/recommendations'));
    }

    public function delete_recommendation(Request $data) {
    	$r = DevSARecommendation::find($data->recommendation_id);
    	$r->is_active = 0;
    	$r->save();

    	return redirect(url('/admin/dev-sa/recommendations'));
    }

    public function create_user_recommendation(Request $data) {
    	$user_r = new DevSAUserRecommendation;
    	$user_r->user_id = $data->user_id;
    	// TODO: Create algorithm to get recommendations
    	
    }

    public function read_user_recommendation($user_r_id) {
    	$user_r = DevSAUserRecommendation::find($user_r_id);
    	$page_title = "Previous Recommendation";
    	$page_header = $page_title;
    	return view('members.dev-sa.past-recommendation')->with('user_r', $user_r)->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function create_recommendation_question(Request $data) {
    	$rq = new DevSARecommendationQuestion;
    	$rq->recommendation_id = $data->recommendation_id;
    	$rq->title = $data->title;
    	$rq->save();

    	return redirect(url('/admin/dev-sa/recommendations/questions'));
    }

    public function update_recommendation_question(Request $data) {
    	$rq = DevSARecommendationQuestion::find($data->rq_id);
    	$rq->recommendation_id = $data->recommendation_id;
    	$rq->title = $data->title;
    	$rq->save();

    	return redirect(url('/admin/dev-sa/recommendations/questions'));
    }

    public function delete_recommendation_question(Request $data) {
    	$rq = DevSARecommendationQuestion::find($data->rq_id);
    	$rq->is_active = 0;
    	$rq->save();

    	return redirect(url('/admin/dev-sa/recommendations/questions'));
    }

    public function create_recommendation_link(Request $data) {
    	$link = new DevSARecommendationLink;
    	$link->recommendation_id = $data->recommendation_id;
    	$link->title = $data->title;
    	$link->link = $data->link;
    	$link->save();

    	return redirect(url('/admin/dev-sa/recommendations/links'));
    }

    public function update_recommendation_link(Request $data) {
    	$link = DevSARecommendationLink::find($data->link_id);
    	$link->recommendation_id = $data->recommendation_id;
    	$link->title = $data->title;
    	$link->link = $data->link;
    	$link->save();

		return redirect(url('/admin/dev-sa/recommendations/links'));
    }

    public function delete_recommendation_link(Request $data) {
    	$link = DevSARecommendationLink::find($data->link_id);
    	$link->is_active = 0;
    	$link->save();

    	return redirect(url('/admin/dev-sa/recommendations/links'));
    }
}
