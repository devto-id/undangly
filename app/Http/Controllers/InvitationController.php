<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\WeddingGuess;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index($slug, Request $request)
    {
        Carbon::setLocale('id');

        $invitation = Invitation::where([
            'slug' => $slug,
            'status' => 'published'
        ])
            ->with([
                'theme',
                'invitable',
                'invitable.song',
                'invitable.digital_gifts',
                'invitable.galleries',
                'invitable.participants',
                'invitable.love_stories'
            ])
            ->firstOrFail();

        $invitation->update([
            "visit_total" => $invitation->visit_total + 1,
            "last_visited_at" => now()
        ]);

        if ($request->get('guess')) {
            $guess = WeddingGuess::where([
                "wedding_id" => $invitation->invitable->id,
                "name" => urldecode($request->get('guess')),
                "place" => urldecode($request->get('place'))
            ])->first();

            if ($guess) {
                $guess->update([
                    "visit_total" => $invitation->visit_total + 1,
                    "last_visited_at" => now()
                ]);
            }
        }

        $theme = $invitation->theme;


        $path = explode('/', $theme->html);
        $path = array_slice($path, -5, -1);
        $path = implode('/', $path);

        $html = file_get_contents($theme->html);

        $baseUrl = config("app.admin_url") . "/storage/$path/";

        // set base URL
        if (preg_match('/<base\s+href="[^"]*"/i', $html)) {
            $html = preg_replace('/<base\s+href="[^"]*"/i', '<base href="' . $baseUrl . '"', $html);
        } else {
            $html = preg_replace('/<head>/i', '<head><base href="' . $baseUrl . '">', $html);
        }

        $newTitle = "Undangan Pernikahan {$invitation->invitable->groom_nickname} & {$invitation->invitable->bride_nickname}";
        $newDescription = [];

        if ($invitation->invitable->reception_date) {
            $newDescription[] = Carbon::parse($invitation->invitable->reception_date)->translatedFormat('l') . ',';
            $newDescription[] =  Carbon::parse($invitation->invitable->reception_date)->format('d F Y');
        }

        if ($invitation->invitable->reception_address) {
            $newDescription[] = "di " . $invitation->invitable->reception_address;
        }

        $newDescription = implode(' ', $newDescription);

        $banner  = $invitation->invitable->cover ?? url('/favicons/social-card-large-compressed.png');

        // set title
        if (preg_match('/<title>.*<\/title>/i', $html)) {
            $html = preg_replace('/<title>.*<\/title>/i', '<title>' . $newTitle . '</title>', $html);
        } else {
            $html = preg_replace('/<head>/i', '<head><title>' . $newTitle . '</title>', $html);
        }

        // set description
        if (preg_match('/<meta\s+name="description"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="description"\s+content="[^"]*"\s*\/?>/i', '<meta name="description" content="' . $newDescription . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="description" content="' . $newDescription . '"></head>', $html);
        }
        // set og:description
        if (preg_match('/<meta\s+property="og:description"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+property="og:description"\s+content="[^"]*"\s*\/?>/i', '<meta property="og:description" content="' . $newDescription . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta property="og:description" content="' . $newDescription . '"></head>', $html);
        }
        // set twitter:description
        if (preg_match('/<meta\s+name="twitter:description"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="twitter:description"\s+content="[^"]*"\s*\/?>/i', '<meta name="twitter:description" content="' . $newDescription . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="twitter:description" content="' . $newDescription . '"></head>', $html);
        }

        // set twitter:card
        if (preg_match('/<meta\s+name="twitter:card"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="twitter:card"\s+content="[^"]*"\s*\/?>/i', '<meta name="twitter:card" content="summary_large_image">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="twitter:card" content="summary_large_image"></head>', $html);
        }
        // set twitter:site
        if (preg_match('/<meta\s+name="twitter:site"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="twitter:site"\s+content="[^"]*"\s*\/?>/i', '<meta name="twitter:site" content="@undangly">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="twitter:site" content="@undangly"></head>', $html);
        }
        // set twitter:image
        if (preg_match('/<meta\s+name="twitter:image"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="twitter:image"\s+content="[^"]*"\s*\/?>/i', '<meta name="twitter:image" content="' . $banner . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="twitter:image" content="' . $banner . '"></head>', $html);
        }

        // set twitter:creator
        if (preg_match('/<meta\s+name="twitter:creator"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="twitter:creator"\s+content="[^"]*"\s*\/?>/i', '<meta name="twitter:creator" content="@undangly">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="twitter:creator" content="@undangly"></head>', $html);
        }

        //  set og:url
        if (preg_match('/<meta\s+property="og:url"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+property="og:url"\s+content="[^"]*"\s*\/?>/i', '<meta property="og:url" content="' . url()->current() . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta property="og:url" content="' . url()->current() . '"></head>', $html);
        }

        // set og:type
        if (preg_match('/<meta\s+property="og:type"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+property="og:type"\s+content="[^"]*"\s*\/?>/i', '<meta property="og:type" content="website">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta property="og:type" content="website"></head>', $html);
        }

        // set og:image
        if (preg_match('/<meta\s+property="og:image"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+property="og:image"\s+content="[^"]*"\s*\/?>/i', '<meta property="og:image" content="' . $banner . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta property="og:image" content="' . $banner . '"></head>', $html);
        }

        // set twitter:title
        if (preg_match('/<meta\s+name="twitter:title"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="twitter:title"\s+content="[^"]*"\s*\/?>/i', '<meta name="twitter:title" content="' . $newTitle . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="twitter:title" content="' . $newTitle . '"></head>', $html);
        }
        // set og:title
        if (preg_match('/<meta\s+property="og:title"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+property="og:title"\s+content="[^"]*"\s*\/?>/i', '<meta property="og:title" content="' . $newTitle . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta property="og:title" content="' . $newTitle . '"></head>', $html);
        }

        $additionalHeaders = "
                <link rel='mask-icon' href='" . url('/favicons/safari-pinned-tab.svg') . "' color='#5bbad5'>
                <meta name='msapplication-config' content='{{ url('/favicons/browserconfig.xml') }}'>
                <link rel='shortcut icon' href='{{ url('/favicons/favicon.ico') }}'>
                <link rel='apple-touch-icon' sizes='57x57' href='" . url('/favicons/apple-icon-57x57.png') . "'>
                <link rel='apple-touch-icon' sizes='60x60' href='" . url('/favicons/apple-icon-60x60.png') . "'>
                <link rel='apple-touch-icon' sizes='72x72' href='" . url('/favicons/apple-icon-72x72.png') . "'>
                <link rel='apple-touch-icon' sizes='76x76' href='" . url('/favicons/apple-icon-76x76.png') . "'>
                <link rel='apple-touch-icon' sizes='114x114' href='" . url('/favicons/apple-icon-114x114.png') . "'>
                <link rel='apple-touch-icon' sizes='120x120' href='" . url('/favicons/apple-icon-120x120.png') . "'>
                <link rel='apple-touch-icon' sizes='144x144' href='" . url('/favicons/apple-icon-144x144.png') . "'>
                <link rel='apple-touch-icon' sizes='152x152' href='" . url('/favicons/apple-icon-152x152.png') . "'>
                <link rel='apple-touch-icon' sizes='180x180' href='" . url('/favicons/apple-icon-180x180.png') . "'>
                <link rel='icon' type='image/png' sizes='192x192' href='" . url('/favicons/android-icon-192x192.png') . "'>
                <link rel='icon' type='image/png' sizes='32x32' href='" . url('/favicons/favicon-32x32.png') . "
                <link rel='icon' type='image/png' sizes='96x96' href='" . url('/favicons/favicon-96x96.png') . "
                <link rel='icon' type='image/png' sizes='16x16' href='" . url('/favicons/favicon-16x16.png') . "
                <link rel='manifest' href='" . url('/favicons/manifest.json') . "'>
                <meta name='msapplication-TileColor' content='#ffffff'>
                <meta name='msapplication-TileImage' content='" . url('/favicons/ms-icon-144x144.png') . "'>
                <meta name='theme-color' content='#ffffff'>
        ";

        // set additional headers
        if (preg_match('/<\/head>/i', $html)) {
            $html = preg_replace('/<\/head>/i', $additionalHeaders . '</head>', $html);
        } else {
            $html = preg_replace('/<body([^>]*)>/', '<head>' . $additionalHeaders . '</head><body$1>', $html);
        }

        // set invitation id
        $dataApiUrl =  "https://app.undangly.com/api/v1/invitation/{$invitation->id}";
        if (preg_match('/<body[^>]*\sdata-u="[^"]*"/', $html)) {
            $html = preg_replace('/(<body[^>]*\s)data-u="[^"]*"/', '$1data-u="' . base64_encode($dataApiUrl) . '"', $html);
        } else {
            $html = preg_replace('/<body([^>]*)>/', '<body$1 data-u="' . base64_encode($dataApiUrl) . '">', $html);
        }

        return response($html)
            ->header('Content-Type', 'text/html');
    }
}
