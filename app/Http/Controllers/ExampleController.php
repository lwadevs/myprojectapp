<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $ourName = 'Tippin';

        return view('homepage', ['name' => $ourName]);
    }

    public function aboutPage() {
        return view('single-post');
    }
}