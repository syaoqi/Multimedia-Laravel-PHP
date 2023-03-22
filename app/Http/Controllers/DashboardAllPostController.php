<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DashboardAllPostController extends Controller
{
    public function index(){

        //  return view('dashboard.allposts', [
        //     'posts' => Post::latest()->filter()->paginate(8)
        //  ]);

        $title = '';
        if (request('category')) {
            $category = Category::firstwhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstwhere('username', request('author'));
            $title = ' in ' . $author->name;
        }

        return view('dashboard.allposts', [
            "title" => "All Post" . $title,

            // "posts"=> Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(4)
            ->withQueryString()
        ]);
    }
}
