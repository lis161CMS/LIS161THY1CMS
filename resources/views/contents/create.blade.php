@extends('layouts.nav')

@section('content')
<div class="container">
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

                    {{ Form::open(array('action' => 'ContentController@store','method' => 'POST')) }}
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
</div>
@endsection
