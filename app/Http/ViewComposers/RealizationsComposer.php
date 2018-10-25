<?php

namespace App\Http\ViewComposers;

use DB;

class RealizationsComposer {

    public function compose($view) {
        $posts = DB::table('posts')
                ->latest()
                ->get();
        
        $view->with('posts', $posts);
    }

    public function YoutubeID($url) {
        if (strlen($url) > 11) {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
                return $match[1];
            } else
                return false;
        }

        return $url;
    }

}
