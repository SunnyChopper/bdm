<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Custom\BlogPostHelper;

class PagesController extends Controller
{
    public function index() {
    	// Dynamic page features
    	$page_title = "Home";

    	return view('pages.index')->with('page_title', $page_title);
    }

    public function contact() {
    	// Dynamic page features
    	$page_title = "Contact";
    	$page_header = $page_title;

    	return view('pages.contact')->with('page_title', $page_title)->with('page_header', $page_header);
    }

    public function blog() {
        // Dynamic page features
        $page_title = "Blog";
        $page_header = $page_title;

        // Get posts
        $blog_post_helper = new BlogPostHelper();
        $posts = $blog_post_helper->get_all_with_pagination(10);

        return view('pages.blog')->with('page_title', $page_title)->with('page_header', $page_header)->with('posts', $posts);
    }

    public function view_post($post_id, $slug) {
        // Get posts
        $blog_post_helper = new BlogPostHelper($post_id);
        $post = $blog_post_helper->read();

        // Dynamic page features
        $page_title = $post->title;
        $page_header = $page_title;

        return view('pages.view-post')->with('page_title', $page_title)->with('page_header', $page_header)->with('post', $post);
    }

    public function courses() {
        $page_title = "Courses";
        $page_header = $page_title;

        return view('pages.courses')->with('page_title', $page_title)->with('page_header', $page_header);
    }
}
