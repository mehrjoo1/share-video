<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideosRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function create(){
        return view("videos.add");
    }

    public function store(StoreVideosRequest $request){
        // dd($request->all());
       
        Video::create(
            $request->all()
        );
        return redirect()->route('index')->with('success',__('massage.success'));
    }
}
