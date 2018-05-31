@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          @foreach($revisions as $rev)
            <div class="card">
                <div class="card-header">{{ $rev->contents['contentTitle'] }}</div>

                <div class="card-body">
                    {{ $rev->content }}
                </div>
                <div class="card-body">
                    <form action="{!!route('contents.edit', [$rev->content_id,$rev->content])!!}"><input type="submit" value=">" /></form>
                </div>
            </div><br/><br/>
          @endforeach



        </div>
    </div>
</div>
@endsection
