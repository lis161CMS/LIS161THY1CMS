@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php $test=NULL;?>
          @foreach($revisions as $rev)
            <?php if($test=="$rev->content_id")continue;?>
            <div class="card">
                <div class="card-header">{{ $rev->contents['contentTitle'] }} / Post #{{ $rev->content_id }}</div>
                <div class="card-body">
                    {{ $rev->content }}
                </div>
                <div class="card-body">
                    <form action="{!!route('contents.edit', [$rev->id])!!}"><input type="submit" value="EDIT" /></form>
                </div>
            </div><br/><br/>
            <?php $test="$rev->content_id";?>
          @endforeach



        </div>
    </div>
</div>
@endsection
