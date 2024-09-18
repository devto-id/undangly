<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {


        return view('home/index', [
            "reviews" => Review::take(30)->get(),
        ]);
    }

    public function termsAndConditions()
    {
        return view(
            'home/terms-and-conditions',
        );
    }

    public function privacyPolicy()
    {
        return view(
            'home/privacy-policy',
        );
    }

    public function disclaimer()
    {
        return view(
            'home/disclaimer',
        );
    }
}
