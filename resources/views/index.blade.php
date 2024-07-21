{{-- @extends('layout'): این فایل رو مخواهیم گسترش دهیم --}}
@extends('layout')
{{-- @section('content'): مشخص می کنیم کدوم قسمت را میخواهیم گسترش دهیم --}}
{{-- @section('content'): محتوایی که میخواهیم گسترش دهیم بعد از این قسمت میگذاریم و در اخر دستور پایان سکشن --}}
@section('content')
    <x-latest-videos></x-latest-videos>
    <h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
    <div class="row">
        <!-- video-item -->
        @foreach ($mostPopularVideos as $video)
        <x-video-box :video="$video"></x-video-box>
        @endforeach
    </div>

    <h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
    <div class="row">
        <!-- video-item -->
        @foreach ($mostViweVideos as $video)
        <x-video-box :video="$video"></x-video-box>
        @endforeach
    </div>
@endsection
