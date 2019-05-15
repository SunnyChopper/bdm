<?php

namespace App\Custom;

use Carbon\Carbon;
use App\Iteration;
use App\IterationEnrollment;

class IterationHelper {
	
	public static function getAllForUser($user_id) {
		return Iteration::where('user_id', $user_id)->where('is_active', 1)->get();
	}

	public static function getOpenIterationsForUser($user_id) {
		return Iteration::where('user_id', $user_id)->where('outcome', 2)->where('is_active', 1)->get();
	}

	public static function getStatsForUser($user_id) {
		return array(
			'probability_of_success' => IterationHelper::probabilityOfSuccess($user_id),
			'probability_of_failure' => IterationHelper::probabilityOfFailure($user_id),
			'average_iterations_per_day' => IterationHelper::averageIterationsPerDay($user_id),
			'average_iterations_per_week' => IterationHelper::averageIterationsPerWeek($user_id),
			'average_iterations_per_month' => IterationHelper::averageIterationsPerMonth($user_id),
			'average_successes_per_day' => IterationHelper::averageSuccessesPerDay($user_id),
			'average_failures_per_day' => IterationHelper::averageFailuresPerDay($user_id),
			'average_successes_per_week' => IterationHelper::averageSuccessesPerWeek($user_id),
			'average_failures_per_week' => IterationHelper::averageFailuresPerWeek($user_id),
			'average_successes_per_month' => IterationHelper::averageSuccessesPerMonth($user_id),
			'average_failures_per_month' => IterationHelper::averageFailuresPerMonth($user_id)
		);
	}

	public static function getAllHypotheses($user_id) {
		$hypotheses = array();
		$iterations = Iteration::where('user_id', $user_id)->where('is_active', 1)->get();
		foreach($iterations as $iteration) {
			array_push($hypotheses, $iteration->hypothesis);
		}
		return $hypotheses;
	}

	public static function getAllActions($user_id) {
		$actions = array();
		$iterations = Iteration::where('user_id', $user_id)->where('is_active', 1)->get();
		foreach($iterations as $iteration) {
			array_push($actions, $iteration->action);
		}
		return $actions;
	}

	public static function getAllLessons($user_id) {
		$lessons = array();
		$iterations = Iteration::where('user_id', $user_id)->where('is_active', 1)->get();
		foreach($iterations as $iteration) {
			array_push($lessons, $iteration->lesson);
		}
		return $lessons;
	}

	public static function enroll($data) {
		// TODO: Implement Stripe function
	}

	private static function probabilityOfSuccess($user_id) {
		$iterations = Iteration::where('user_id', $user_id)->where('is_active', 1)->get();
		$total = 0;
		$successes = 0;
		if (count($iterations) == 0) {
			return 0;
		} else {
			foreach($iterations as $iteration) {
				if ($iteration->outcome != 2) {
					$total += 1;
					if ($iteration->outcome == 1) {
						$successes += 1;
					}
				}
			}

			return (float)$successes / (float)$total;
		}
	}

	private static function probabilityOfFailure($user_id) {
		$iterations = Iteration::where('user_id', $user_id)->where('is_active', 1)->get();
		$total = 0;
		$failures = 0;
		if (count($iterations) == 0) {
			return 0;
		} else {
			foreach($iterations as $iteration) {
				if ($iteration->outcome != 2) {
					$total += 1;
					if ($iteration->outcome == 0) {
						$failures += 1;
					}
				}
			}

			return (float)$failures / (float)$total;
		}
	}

	private static function averageIterationsPerDay($user_id) {
		$enrollment_date = IterationEnrollment::where('user_id', $user_id)->where('status', 1)->first()->created_at;
		$days = Carbon::parse(Carbon::now())->diffInDays($enrollment_date);
		$iterations = 0;
		for ($i = 0; $i < $days + 1; $i++) {
			if (Iteration::where('user_id', $user_id)->whereDate('created_at', '=', Carbon::now()->subDays($i))->count() > 0) {
				$iterations += 1;
			}
		}
		return (float)$iterations / (float)$days;
	}

	private static function averageIterationsPerWeek($user_id) {
		// TODO
	}

	private static function averageIterationsPerMonth($user_id) {
		// TODO
	}

	private static function averageSuccessesPerDay($user_id) {
		// TODO
	}

	private static function averageFailuresPerDay($user_id) {
		// TODO
	}

	private static function averageSuccessesPerWeek($user_id) {
		// TODO
	}

	private static function averageFailuresPerWeek($user_id) {
		// TODO
	}

	private static function averageSuccessesPerMonth($user_id) {
		// TODO
	}

	private static function averageFailuresPerMonth($user_id) {
		// TODO
	}

}

?>