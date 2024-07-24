<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function create(){
        return view("videos.add");
    }

    public function store(Request $request){
        // dd($request->all());
        Video::create(
            $request->all()
        );
    }
}
