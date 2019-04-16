<?php

namespace App\Custom;

class UsersHelper {
	
	public static function addPoints($user_id, $points) {
		$user = User::find($user_id);
		$user->points = $user->points + $points;
		$user->save();

		return true;
	}

}

?>