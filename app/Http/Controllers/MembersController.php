<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class MembersController extends Controller
{
    public function dashboard() {
    	$user = Auth::user();
    	$page_header = "Dashboard";
    	$page_title = $page_header;
    	return view('members.dashboard')->with('page_title', $page_title)->with('page_header', $page_header)->with('user', $user);
    }
}
