<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 1;

//        $posts = DB::select('select * from posts WHERE id = :id', ['id' => 1]);
        $posts = DB::table('posts')
//            ->where('created_at', '<', now()->subDay())
//            ->orWhere('title','Mrs.')
//            ->whereBetween('id', [2, 3])
//            ->whereNotNull('title')
//            ->select('title')
//            ->distinct()
//                ->orderBy('title','asc')
//            ->latest()
//            ->oldest()
            ->inRandomOrder()
            ->get();
        print_r(now()->subDay());

        dd($posts);
//        return view('posts/index');
    }
}
