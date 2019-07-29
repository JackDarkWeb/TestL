@extends("layouts.base", ["title" => "Edit the post"])

@section("content")
    <form method="post" action="{{route("posts.update", ['id' => $edit->id])}}">
        <input name="_method" type="hidden" value="PUT">

        {{csrf_field()}}

        <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" class="form-control" name="title" id="formGroupExampleInput" placeholder="Enter your title post" value="{{$edit->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{$edit->content}}</textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Contents</label>
            <textarea class="form-control" name="contents" id="exampleFormControlTextarea1" rows="10">{{$edit->contents}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('posts.index')}}" class="btn btn-outline-danger">Back</a>
    </form>
@stop
