<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    public function home()
    {
        $posts = Post::paginate(5);
        return view('home',['posts'=>$posts]);
    }
}
