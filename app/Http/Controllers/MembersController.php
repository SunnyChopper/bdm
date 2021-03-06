<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

use App\Custom\BlogPostHelper;
use App\Custom\UploadHelper;
use App\Custom\DownloadableHelper;

use App\User;

class MembersController extends Controller
{
    public function dashboard() {
        if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

    	$user = Auth::user();
    	$page_header = "Dashboard";
    	$page_title = $page_header;

        $post_helper = new BlogPostHelper();
        $posts = $post_helper->get_all_with_pagination(5);

        $downloads_helper = new DownloadableHelper();
        $downloads = $downloads_helper->get_all();

    	return view('members.dashboard')->with('page_title', $page_title)->with('page_header', $page_header)->with('user', $user)->with('posts', $posts)->with('downloads', $downloads);
    }

    public function edit_profile($user_id) {
        // Check to see if correct user
        if (Auth::guest()) {
            return redirect(url('/login'));
        } else {
            if (Auth::user()->id != $user_id) {
                return redirect(url('/profile/' . $user_id));
            } else {
                // Dynamic page elements
                $page_header = "Edit Profile";
                $page_title = $page_header;

                // Get user object
                $user = User::find($user_id);

                // Return view
                return view('members.edit-profile')->with('page_title', $page_title)->with('page_header', $page_header)->with('user', $user);
            }
        }
    }

    public function update_profile(Request $data) {
        // Check if logged in user
        if (Auth::guest()) {
            redirect(url('/login'));
        } else {
            if (Auth::user()->id == $data->user_id) {
                // Get user 
                $user = User::find($data->user_id);

                if (($data->username != $user->username) && (User::where('username', strtolower($data->username))->count() > 0)) {
                    return redirect()->back();
                }

                if (($data->email != $user->email) && (User::where('email', strtolower($email))->count() > 0)) {
                    return redirect()->back();
                }

                // Upload picture if needed
                if ($data->hasFile('profile_image')) {
                    $upload_helper = new UploadHelper();
                    $profile_image = $data->file('profile_image');
                    $file_path = "users/" . $user->id . "/profile-image" . $profile_image->getClientOriginalExtension();
                    $image_url = $upload_helper->upload_to_s3($profile_image, $file_path);
                    $user->profile_image_url = $image_url;
                }

                $user->first_name = $data->first_name;
                $user->last_name = $data->last_name;
                $user->username = $data->username;
                $user->email = $data->email;
                $user->facebook_link = $data->facebook_link;
                $user->twitter_link = $data->twitter_link;
                $user->instagram_link = $data->instagram_link;
                $user->youtube_link = $data->youtube_link;
                $user->github_link = $data->github_link;
                $user->dribbble_link = $data->dribbble_link;
                $user->website_link = $data->website_link;

                $user->save();

                return redirect()->back();
            }
        }
    }

    public function tools() {
        if ($this->redirect_guest() == 1) {
            return redirect(url('/login'));
        }

        // Dynamic page elements
        $page_header = "Tools";
        $page_title = $page_header;

        return view('members.tools')->with('page_title', $page_title)->with('page_header', $page_header);       
    }

    public function attempt_login(Request $data) {
        if (User::where('username', strtolower($data->username))->count() > 0) {
            $user = User::where('username', strtolower($data->username))->first();
            if (Hash::check($data->password, $user->password)) {
                if ($data->has('remember')) {
                    Auth::loginUsingId($user->id, true);
                } else {
                    Auth::loginUsingId($user->id, false);
                }

                return redirect(url('/members/dashboard'));
            } else {
                return redirect()->back()->with('error', 'Incorrect password.');
            }
        } else {
            return redirect()->back()->with('error', 'Username not found.');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect(url('/'));
    }

    /* Private functions */
    private function redirect_guest() {
        if (Auth::guest()) {
            return 1;
        } else {
            return 0;
        }
    }
}
