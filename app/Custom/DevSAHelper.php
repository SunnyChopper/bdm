<?php

namespace App\Custom;

use App\DevSARecommendation;
use App\DevSARecommendationLink;
use App\DevSARecommendationQuestion;
use App\DevSAUserRecommendation;

class DevSAHelper {
	
	public static function getPastRecommendations($user_id) {
		return DevSAUserRecommendation::where('user_id', $user_id)->get();
	}

	public static function getRecommendations($data) {
		// TODO: Implement function to calculate recommendations
	}

	public static function getLinksForRecommendation($recommendation_id) {
		return DevSARecommendationLink::where('recommendation_id', $recommendation_id)->where('is_active', 1)->get();
	}

	public static function getQuestions() {
		return DevSARecommendationQuestion::where('is_active', 1)->get();
	}

	public static function getAllRecommendations() {
		return DevSARecommendation::where('is_active', 1)->get();
	}

	public static function getQuestionsForRecommendations($recommendation_id) {
		return DevSARecommendationQuestion::where('recommendation_id', $recommendation_id)->where('is_active', 1)->get();
	}

}

?>