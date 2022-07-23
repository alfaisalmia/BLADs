<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::orderBy('id', 'desc')->paginate(9);
        $recentposts = Post::select('post_title', 'id', 'post_image', 'created_at')->orderBy('id', 'desc')->take(7)->get();
        return view('frontend.homepage', compact('recentposts','categories','posts'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function service(){
        return view('frontend.service');
    }
    public function ourteam(){
        return view('frontend.team');
    }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
