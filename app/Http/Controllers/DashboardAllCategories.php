<?php

namespace App\Http\Controllers;

use App\Models\Category;

class DashboardAllCategories extends Controller
{
    public function index()
    {
        return view('dashboard.allcategories', [
            'categories' => Category::all()
        ]);
    }
}
