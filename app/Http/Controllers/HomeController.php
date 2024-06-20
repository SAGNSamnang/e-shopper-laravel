<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slideshow;
use App\Models\Product;
class HomeController extends Controller
{
    function index() {
        // Select all slideshow from models slidshow and return into view
        $slideshows = Slideshow::where('enable', 1)->orderBy('ssorder')->get();

        // Select featured product
        $featured_products = Product::where(
            'featured', 1
        )->get();
        return view('home', compact('slideshows', 'featured_products'));
    }
}
