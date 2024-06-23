<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Complexity\Complexity;
use App\Models\Slideshow;

class SlideshowController extends Controller
{
    function listAll() 
    {
        $slideshows = Slideshow::paginate(14);
        return view('admin.slideshow.index', compact('slideshows'));
    }
    // function edit() 
    // {

    // }
    // function update() 
    // {

    // }
}
