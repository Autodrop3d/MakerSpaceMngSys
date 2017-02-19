@extends('scaffold-interface.layouts.app')

@section('title','Images')

@section('content')
    <section class="content">
        <h1>
            Uploaded Images
        </h1>
        <form class = 'col s3' method = 'get' action = '{!!url("image")!!}/create'>
            <button class = 'btn btn-primary' type = 'submit'>Upload New Image</button>
        </form>
        <br>
        <br>
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-2">
                    <div class="thumbnail" style="overflow: hidden;">
                        <a href="{{Storage::url($image->path)}}">
                            <img src="{{Storage::url($image->path)}}" style="width: 100%;">
                            <div class="caption">
                                <p>{{$image->originalname}}</p>
                                <p><b>{{$image->user()->first()->name}}</b></p>
                            </div>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
        {!! $images->render() !!}

    </section>
@endsection