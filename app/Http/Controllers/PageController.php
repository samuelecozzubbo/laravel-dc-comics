<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class PageController extends Controller
{
    public function index()

    {
        $title = 'Home Page';
        $comics_number = Comic::count();
        return view('home', compact('title', 'comics_number'));
    }
}
