<?php

namespace App\Custom;

use App\DevSAResult;

class DevSAResultsHelper {
	/* Private global variables */
	private $id;

	/* Constructor */
	public function __construct($id = 0) {
		$this->id = $id;
	}

	/* Public functions */
	public function create($data) {
		$result = new DevSAResult;
		$result->main_category = $data["main_category"];
		$result->secondary_category = $data["secondary_category"];
		$result->user_id = $data["user_id"];
		$result->save();

		return $result->id;
	}

	public function read($id = 0) {
		if ($id == 0) {
			$id = $this->id;
		}

		return DevSAResult::find($id);
	}

	public function get_all_for_user($user_id) {
		return DevSAResult::where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
	}
}