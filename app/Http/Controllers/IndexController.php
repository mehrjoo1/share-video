<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        // $videos = Video::all(); دریافت همه ویدئو ها
        // latest() : سورت بر اساس تاریخ ساخت
        // take(6) : شش تای آخر
        // $videos = Video::latest()->take(6)->get(); اینو از طریق کامپوننت به صحفه پاس دادم
        $mostPopularVideos = Video::all()->random(6);
        $mostViweVideos = Video::all()->random(6);
        return view('index',compact('mostPopularVideos','mostViweVideos'));
    }
}
