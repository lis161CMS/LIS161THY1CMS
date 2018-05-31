@extends('layouts.nav')

@section('content')
<style>
        body{
            background-image:url('seigaiha.png');
        }
        label{
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }
</style>
    <br/><br/>
        {!!Form::model($content, [
            'route' => ['contents.update', $content->id],
            'class' => 'form-horizontal',
            'method'=> 'PUT'
        ])!!}
        @php
            $user = DB::table('contents')->where('id',$content->content_id)->value('contentTitle');
        @endphp
        <div align="center">
        <div class="form-group">
            <label for="title">Title</label>

            <div class="col-md-6">
            {!! Form::text('contentTitle',$user, ['class'=>'form-control'])!!}
            </div>
        </div>

        <div class="form-group">
            <label for="content" class="col-md-4 control-label">Content</label>
            <div class="col-md-6">
                {!! Form::textarea('content',NULL, ['class'=>'form-control'])!!}
            </div>
        </div>
        <div class="form-group">
            <input type="submit"  name="submit" value="Update">
        </div></div>
        {!! Form::close() !!}
@endsection
