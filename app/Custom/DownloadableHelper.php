<?php

namespace App\Custom;

use App\Downloadable;

class DownloadableHelper {
	/* Private global variables */
	private $id;

	/* Constructor */
	public function __construct($id = 0) {
		$this->id = $id;
	}

	/* Public functions */
	public function create($data) {
		// Get data and save
		$downloadable = new Downloadable;
		$downloadable->file_url = $data["file_url"];
		$downloadable->file_type = $data["file_type"];
		$downloadable->title = $data["title"];
		$downloadable->description = $data["description"];

		// Return the ID of the downloadable
		return $downloadable->id;
	}

	public function read($id = 0) {
		// Check to see if no ID passed in
		if ($id == 0) {
			$id = $this->id;
		}

		// Return the blog post object
		return Downloadable::find($id);
	}

	public function update($data) {
		// Get data and update
		$downloadable = Downloadable::find($data["downloadable_id"]);
		$downloadable->title = $data["title"];
		$downloadable->description = $data["description"];
		$downloadable->save();
	}

	public function delete($id = 0) {
		// Check to see if no ID passed in
		if ($id == 0) {
			$id = $this->id;
		}

		// Delete
		$downloadable = Downloadable::find($id);
		$downloadable->is_active = 0;
		$downloadable->save();
	}

	public function get_all() {
		return Downloadable::where('is_active', 1)->get();
	}

	public function get_all_with_pagination($pagination) {
		return Downloadable::where('is_active', 1)->paginate($pagination);
	}

	public static function get_next_id() {
		$downloadable = Downloadable::orderBy('created_at', 'desc')->first();
		return $downloadable->id + 1;
	}
}