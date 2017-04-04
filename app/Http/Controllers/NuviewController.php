<?php

namespace Resources\Http\Controllers;

use Resources\Http\Controllers\Controller;

class NuviewController extends Controller
{
    public function getIndex()
    {
        $view = view('nuview.index');
        $view->active_page = 'home';
        return $view;
    }

    public function getWritingAPost()
    {
        $view = view('nuview.writing-a-post');
        $view->active_page = 'writing-a-post';
        return $view;
    }

    public function getSocialMedia()
    {
        $view = view('nuview.social-media');
        $view->active_page = 'social-media';
        return $view;
    }

    public function getDosAndDonts()
    {
        $view = view('nuview.dos-and-donts');
        $view->active_page = 'dos-and-donts';
        return $view;
    }
}
