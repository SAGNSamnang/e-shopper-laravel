<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slideshow;
class HomeController extends Controller
{
    function index() {
        // Select all slideshow from models slidshow and return into view
        $slideshows = Slideshow::all();
        return view('home', compact('slideshows'));
    }
}
