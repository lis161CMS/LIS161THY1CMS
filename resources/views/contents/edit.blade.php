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
            $content="tete";
        @endphp
        <div align="center">
        <div class="form-group">
            <label for="title">Title</label>
            <div class="col-md-6">
            {!! Form::text('$content',NULL, ['class'=>'form-control'])!!}
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-md-4 control-label">Content</label>
            <div class="col-md-6">
                {!! Form::textarea('content',NULL, ['class'=>'form-control'])!!}
            </div>
        </div>
        <div class="form-group">
            <input type="submit"  name="submit" value="save">
        </div></div>
        {!! Form::close() !!}
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Post</div>

                <div class="card-body justify-content-center text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Form::open(array('action' => 'ContentController@update','method' => 'PUT')) }}
          					{{ csrf_field() }}
                    <div class="form-group row justify-content-center text-center">
                        <label for="contentTitle" class="col-form-label">{{ __('Title:') }}</label>&nbsp;&nbsp;
                        {{ Form::text('contentTitle') }}
                    </div>
                    <div class="form-group row justify-content-center text-center">
          					{{ Form::textarea('content', null, ['class' => 'foo']) }}
                    </div>
          					<br/>
          					{{ Form::submit() }}
          					{{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
