@extends('layout')
@section('content')
    <div id="upload">
        <div class="row">
            <!-- upload -->
            <x-validations-errors></x-validations-errors>
            <div class="col-md-8">
                <h1 class="page-title"><span>آپلود</span> ویدیو</h1>
                <form action="{{route('videos.update',$video->slug)}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>@lang('videos.name')</label>
                            <input type="text" name="name" class="form-control" value="{{$video->name}}" placeholder="@lang('videos.name')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.length')</label>
                            <input type="text" name="length" class="form-control" value="{{$video->length}}" placeholder="@lang('videos.length')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.slug')</label>
                            <input type="text" name="slug" class="form-control" value="{{$video->slug}}" placeholder="@lang('videos.slug')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.url')</label>
                            <input type="text" name="url" class="form-control" value="{{$video->url}}" placeholder="@lang('videos.url')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.thumbnail')</label>
                            <input type="text" name="thumbnail" class="form-control" value="{{$video->thumbnail}}" placeholder="@lang('videos.thumbnail')">
                        </div>
                        <div class="col-md-6">
                            <label>@lang('videos.category')</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>@lang('videos.description')</label>
                            <textarea class="form-control" name="description" rows="4" placeholder="@lang('videos.description')">{{$video->description}}</textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                        </div>
                    </div>
                </form>
            </div><!-- // col-md-8 -->

            <div class="col-md-4">
                <a href="#"><img src="/demo_img/upload-adv.png" alt=""></a>
            </div><!-- // col-md-8 -->
            <!-- // upload -->
        </div><!-- // row -->
    </div><!-- // upload -->
@endsection
