@extends("layouts.base", ["title" => "Create the post"])

@section("content")
    <form method="post" action="{{route("posts.store")}}">

        {{csrf_field()}}

        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Enter your title post">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Contents</label>
            <textarea class="form-control" name="contents" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('posts.index')}}" class="btn btn-outline-danger">Back</a>
    </form>
@stop
