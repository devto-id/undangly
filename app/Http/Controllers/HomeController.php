<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Review;
use App\Models\Invitation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home/index', [
            "reviews" => Review::take(30)->get(),
            "themes" => Theme::get(),

            'invitations' => Invitation::where('status', 'published')
                ->with('theme')
                ->with('invitable')
                ->latest()
                ->whereNotNull('slug')
                ->limit(12)
                ->get(),
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
