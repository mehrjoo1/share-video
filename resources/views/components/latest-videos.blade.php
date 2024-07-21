<h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
<div class="row">
    <!-- video-item -->
    @foreach ($videos as $video)
        {{-- <x-video-box :video="$video"></x-video-box>
        با این خط کد به کامپوننت ویدئو باکس میگیم متغیرمون چی هست
        --}}
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
