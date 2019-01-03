<?php

namespace App\Custom;

use App\DevSelfAwarenessResource;

class DevSelfAwarenessResourceHelper {
	/* Private global variables */
	private $id;

	/* Constructor */
	public function __construct($id = 0) {
		$this->id = $id;
	}

	/* Public functions */
	public function create($data) {
		$resource = new DevSelfAwarenessResource;
		$resource->main_category = $data["main_category"];
		$resource->secondary_category = $data["secondary_category"];
		$resource->title = $data["title"];
		$resource->description = $data["description"];
		$resource->image_url = $data["image_url"];
		$resource->link = $data["link"];
		$resource->save();

		return $resource->id;
	}

	public function read($id = 0) {
		if ($id == 0) {
			$id = $this->id;
		}

		return DevSelfAwarenessResource::find($id);
	}

	public function update($data) {
		$resource = DevSelfAwarenessResource::find($data["resource_id"]);
		$resource->main_category = $data["main_category"];
		$resource->secondary_category = $data["secondary_category"];
		$resource->title = $data["title"];
		$resource->description = $data["description"];
		$resource->image_url = $data["image_url"];
		$resource->link = $data["link"];
		$resource->save();
	}

	public function delete($id = 0) {
		if ($id == 0) {
			$id = $this->id;
		}

		$resource = DevSelfAwarenessResource::find($id);
		$resource->is_active = 0;
		$resource->save();
	}

	public function get_all() {
		return DevSelfAwarenessResource::where('is_active', 1)->get();
	}

	public function get_all_with_pagination($pagination) {
		return DevSelfAwarenessResource::where('is_active', 1)->paginate($pagination);
	}

	public function get_all_with_categories($main_category, $secondary_category) {
		return BlogPost::where('main_category', $main_category)->where('secondary_category', $secondary_category)->where('is_active', 1)->get();
	}
}