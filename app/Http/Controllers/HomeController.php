<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index', [
            "reviews" => Review::take(30)->get()
        ]);
    }

    public function contact()
    {
        return view(
            'contact/contact'
        );
    }
}
