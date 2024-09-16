<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index($slug)
    {
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

        // set title
        $newTitle = "{$invitation->invitable->groom_name} & {$invitation->invitable->bride_name}";

        if (preg_match('/<title>.*<\/title>/i', $html)) {
            $html = preg_replace('/<title>.*<\/title>/i', '<title>' . $newTitle . '</title>', $html);
        } else {
            $html = preg_replace('/<head>/i', '<head><title>' . $newTitle . '</title>', $html);
        }

        $newDescription = "Undangan pernikahan {$invitation->invitable->groom_name} & {$invitation->invitable->bride_name}";

        if (preg_match('/<meta\s+name="description"\s+content="[^"]*"\s*\/?>/i', $html)) {
            $html = preg_replace('/<meta\s+name="description"\s+content="[^"]*"\s*\/?>/i', '<meta name="description" content="' . $newDescription . '">', $html);
        } else {
            $html = preg_replace('/<\/head>/i', '<meta name="description" content="' . $newDescription . '"></head>', $html);
        }

        // set invitation id
        if (preg_match('/<body[^>]*\sdata-u="[^"]*"/', $html)) {
            $html = preg_replace('/(<body[^>]*\s)data-u="[^"]*"/', '$1data-u="' . base64_encode(url("api/v1/invitation/$invitation->id")) . '"', $html);
        } else {
            $html = preg_replace('/<body([^>]*)>/', '<body$1 data-u="' . base64_encode(url("api/v1/invitation/$invitation->id")) . '">', $html);
        }

        return response($html)
            ->header('Content-Type', 'text/html');
    }
}
