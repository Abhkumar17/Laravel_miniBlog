<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class DashboardController extends Controller
{
    public function showPost(Request $request)
    {
        //$posts = Post::paginate(5);
        $userid = $request->user()->id;
        $posts = Post::where('user_id',$userid)->get();
        return view('dashboard',['posts'=>$posts]);
    }
}
