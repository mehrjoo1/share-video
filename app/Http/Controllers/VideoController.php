<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function create(){
        return view("videos.add");
    }
}
