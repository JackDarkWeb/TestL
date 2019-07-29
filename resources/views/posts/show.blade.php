@extends("layouts.base", ["title" => "Home"])

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

@stop
