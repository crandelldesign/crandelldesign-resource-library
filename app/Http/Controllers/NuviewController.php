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
}