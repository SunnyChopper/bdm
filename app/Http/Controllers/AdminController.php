<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Auth;

class AdminController extends Controller
{

	/* Public functions */
    public function index() {
    	$page_header = "Admin Login";

    	// Redirect if needed
    	$redirect_code = $this->redirect_admin();
    	if ($redirect_code == 1) {
    		$this->login_admin();
    		return redirect(url('/admin/dashboard/'));
    	} elseif ($redirect_code == 2) {
    		return redirect(url('/members/dashboard/'));
    	}

    	return view('admin.login')->with('page_header', $page_header);
    }

    public function dashboard() {
        $page_header = "Admin Dashboard";

        return view('admin.dashboard')->with('page_header', $page_header);
    }


    /* Private functions */
    private function login_admin() {
    	$user = Auth::user();
    	$backend_auth = $user->backend_auth;

    	Session::put('admin_login', true);
    	Session::put('admin_switch', false);
    	Session::put('backend_auth', $backend_auth);
    	Session::save();
    }

    private function redirect_admin() {
    	if (Auth::guest()) {
    		return 0;
    	} else {
    		if (Auth::user()->backend_auth == 0) {
    			return 2;
    		} else {
    			return 1;
    		}
    	}
    }
}
