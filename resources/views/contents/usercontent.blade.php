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
                    <form action="{!!route('contents.edit', [$rev->id])!!}"><input type="submit" value="EDIT" /></form>
                </div>
            </div><br/><br/>
          @endforeach



        </div>
    </div>
</div>
@endsection
