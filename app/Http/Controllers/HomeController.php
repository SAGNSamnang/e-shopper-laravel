<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slideshow;
class HomeController extends Controller
{
    function index() {
        // Select all slideshow from models slidshow and return into view
        $slideshows = Slideshow::where('enable', 1)->orderBy('ssorder')->get();
        return view('home', compact('slideshows'));
    }
}
