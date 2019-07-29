@extends("layouts.base", ["title" => "Home"])

@section("content")

    <div class="row">

        @forelse($posts as $post)
        <div class="col-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <a href="{{route("posts.show", ['id' => $post->id])}}">{{$post->title}}</a></h5>
                    <h5 class="p-3">{{$post->short_content}}</h5>
                    <a href="{{route("posts.show", ['id' => $post->id])}}" class="btn btn-primary">Read more</a>

                    <div class="card-footer">
                        <small class="text-muted">{{$post->formattedDate}}</small>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <div class="alert alert-info">Aucune information n'est pas disponible actuellement</div>
        @endforelse

    </div>
    {{$posts->links()}}
@stop
