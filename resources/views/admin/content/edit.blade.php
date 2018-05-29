xtends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit content</h3>
    <a href="/">Go back to all content</a>
    <form action="/admin/content/{{ $content->id }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Content title" name="title" value="{{ $content->title }}">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" placeholder="Content body">{{ $content->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br>
    <br>

    @if(count($content->revisions))
        <h3>
            Past versions
        </h3>
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
                @foreach($content->revisions as $revision)
                <tr>
                    <td>{{ $revision->user->first_name }} {{ $revision->user->middle_name }} {{ $revision->user->last_name }}</td>
                    <td>{{ array_key_exists('title', $revision->before) ? $revision->before['title'] : 'NA' }}</td>
                    <td>{{ array_key_exists('body', $revision->before) ? $revision->before['body'] : 'NA' }}</td>
                    <td>
                        <form action="/admin/content-reversions/{{ $revision->id }}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link">Revert to this version</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection