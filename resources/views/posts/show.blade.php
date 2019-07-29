@extends("layouts.base", ["title" => $post->title])

@section("content")

    <div class="row">

        <div class="col mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold"> {{$post->title}}</h4>
                    <small class="text-muted">{{$post->formattedDate}}</small>
                    <h6 class="p-3 font-weight-bold">{{$post->content}}</h6>
                    <p>{{$post->contents}}</p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('posts.edit', ['id' => $post->id])}}" class="btn btn-outline-warning">Edit</a>
    <a href="{{route('posts.index')}}" class="btn btn-outline-info">Back</a>

@stop
