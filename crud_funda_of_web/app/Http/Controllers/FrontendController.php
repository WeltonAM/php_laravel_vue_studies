<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index()
    {
        return Inertia::render('Frontend/Home');
    }

    public function about()
    {
        return Inertia::render('Frontend/About', [
            'title' => 'About Page',
            'description' => 'This is the about page',
        ]);
    }


}
