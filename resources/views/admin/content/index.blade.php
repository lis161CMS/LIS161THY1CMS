@extends('layouts.app')

@section('content')
<div class="container">
    <h3>All content <a class="btn btn-primary" href="/admin/content/create">Add new content</a></h3>

    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($allContent as $content)
            <tr>
                <td>{{ $content->user->first_name }} {{ $content->user->middle_name }} {{ $content->user->last_name }}</td>
                <td>{{ $content->title }}</td>
                <td>{{ $content->body }}</td>
                <td><a class="btn btn-link" href="/admin/content/{{ $content->id }}/edit">Edit this content</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
