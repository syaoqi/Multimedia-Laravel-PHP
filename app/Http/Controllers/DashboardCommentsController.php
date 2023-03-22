<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class DashboardCommentsController extends Controller
{
    public function index()
    {
        return view('dashboard.posts.show', [
            'comments' => Comment::all()
        ]);

    }
}
