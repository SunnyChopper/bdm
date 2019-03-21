<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Hash;
use Illuminate\Support\Facades\Mail;

use App\Mail\NewUser;

use App\Custom\DownloadableHelper;
use App\Custom\UploadHelper;

class DownloadablesController extends Controller
{
    public function index() {
    	$page_title = "Downloads";
    	$page_header = $page_title;

    	$download_helper = new DownloadableHelper();
    	$downloads = $download_helper->get_all();

    	return view('members.downloadables.view')->with('page_title', $page_title)->with('page_header', $page_header)->with('downloads', $downloads);
    }

    public function view_all() {
    	$page_title = "Downloadables";
    	$page_header = $page_title;

    	$download_helper = new DownloadableHelper();
    	$downloads = $download_helper->get_all();

    	return view('admin.downloadables.view')->with('page_title', $page_title)->with('page_header', $page_header)->with('downloads', $downloads);
    }

    public function new() {
    	$page_title = "New Downloadable";
    	$page_header = $page_title;

    	return view('admin.downloadables.new')->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function show_landing_page($download_id) {
        $download_helper = new DownloadableHelper($download_id);
        $download = $download_helper->read();
        $page_title = $download->title;

        return view('admin.downloadables.lp-template')->with('page_title', $page_title)->with('download', $download);
    }

    public function register_user(Request $data) {
        if (User::where('username', strtolower($data->username))->count() > 0) {
            return redirect()->back()->with('error', 'Username already taken.');
        }

        if (User::where('email', strtolower($data->email))->count() > 0) {
            return redirect()->back()->with('error', 'Email already taken.');
        }

        $user = new User;
        $user->first_name = $data->first_name;
        $user->last_name = $data->last_name;
        $user->email = $data->email;
        $user->password = Hash::make($data->password);
        $user->save();

        // Send welcome email to user
        Mail::to($data->email)->send(new NewUser($data->first_name));

        // Redirect to download file
        $download_helper = new DownloadableHelper($data->download_id);
        $download = $download_helper->read();
        return redirect(url($download->file_url));
    }

    public function create(Request $data) {
    	// Upload file
    	$file = $data->file('upload_file');
    	$file_path = "downloads/" . DownloadableHelper::get_next_id() . "." . $file->getClientOriginalExtension();
    	$upload_helper = new UploadHelper();
    	$file_url = $upload_helper->upload_to_s3($file, $file_path);

    	// Get file type
    	if ($file->getClientOriginalExtension() == "pdf") {
    		$file_type = 1;
    	} else if ($file->getClientOriginalExtension() == "mp3") {
    		$file_type = 2;
    	} else if ($file->getClientOriginalExtension() == "pptx") {
    		$file_type = 3;
    	} else if ($file->getClientOriginalExtension() == "docx") {
    		$file_type = 4;
    	}

    	// Create array for helper
		$download_data = array(
			"file_url" => $file_url,
			"file_type" => $file_type,
			"title" => $data->title,
			"description" => $data->description
		);

		// Create
		$downloads_helper = new DownloadableHelper();
		$download_id = $downloads_helper->create($download_data);

		// Take back to dashboard
		return redirect(url('/admin/downloads'));
    }

    public function edit($download_id) {
    	$downloads_helper = new DownloadableHelper($download_id);
    	$download = $downloads_helper->read();

    	$page_title = "Edit Download";
    	$page_header = $page_title;

    	return view('admin.downloadables.edit')->with('page_title', $page_title)->with('page_header', $page_header)->with('download', $download);
    }

    public function update(Request $data) {
    	$download_data = array(
    		"downloadable_id" => $data->downloadable_id,
    		"title" => $data->title,
    		"description" => $data->description
    	);

    	$downloads_helper = new DownloadableHelper();
    	$downloads_helper->update($download_data);

    	// Take back to dashboard
		return view(url('/admin/downloads'));
    }

    public function delete(Request $data) {
    	$downloads_helper = new DownloadableHelper();
    	$downloads_helper->delete($data->downloadable_id);

    	// Take back to dashboard
		return view(url('/admin/downloads'));
    }
}
