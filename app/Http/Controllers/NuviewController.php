<?php

namespace Resources\Http\Controllers;

use Resources\Http\Controllers\Controller;

class NuviewController extends Controller
{
    public function getIndex()
    {
        $view = view('nuview.index');
        return $view;
    }

    public function getWritingAPost()
    {
        $view = view('nuview.writing-a-post');
        return $view;
    }

    public function getDosAndDonts()
    {
        $view = view('nuview.dos-and-donts');
        return $view;
    }
}