<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideosRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function create(){
        $categories = Category::all();
        return view("videos.add",compact('categories'));
    }

    public function store(StoreVideosRequest $request){
        // dd($request->all());
       
        Video::create(
            $request->all()
        );
        return redirect()->route('index')->with('success',__('massage.success'));
    }

    public function show(Request $request,video $video){
        // $video = Video::find($id);
        // if($video == null){
        //     abort(404);
        // }
        return view('videos.show',compact('video'));
    }

    public function edit(video $video){
        $categories = Category::all();
        return view('videos.edit',compact('video','categories'));
    }
    public function update(UpdateVideoRequest $request,video $video){
        $video->update(
            $request->all()
        );
        return redirect()->route('videos.show',$video->slug)->with('success',__('massage.update'));
    }
}
