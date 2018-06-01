@extends('layouts.nav')

@section('content')
<main>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <?php $test=NULL;?>
          @foreach($revisions as $rev)
            <?php $tt="$rev->contents";?>
            <?php if($test=="$rev->content_id")continue;?>
            <?php if(strpos($tt,'null')==false)continue;?>
            <div class="card">
                <div class="card-header">{{ $rev->contents['contentTitle'] }} / Post #{{ $rev->content_id }}</div>
                <div class="card-body">
                    {{ $rev->content }}
                </div>
                <div class="card-body">
                    <form style="float:left;margin-right:10px;"action="{!!route('admincontent.edit', [$rev->id])!!}"><input type="submit" value="EDIT" /></form>
                    {!! Form::open(['route'=>['admincontent.destroy',$rev->content_id], 'method' => 'delete'])!!}
                    {!! Form::button('DELETE', ['type' => 'submit', 'onclick' => "return confirm ('Are you sure?')"])!!}
                    {!! Form::close()!!}
                </div>
            </div><br/><br/>
            <?php $test="$rev->content_id";?>
          @endforeach



        </div>
    </div>
</div>
</main>
@endsection
