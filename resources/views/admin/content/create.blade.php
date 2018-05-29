@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Create new content</h3>
    <form action="/admin/content" method="post">
        {{ csrf_field() }}        
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Content title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" placeholder="Content body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
