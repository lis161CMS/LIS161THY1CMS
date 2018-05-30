@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Navigations for User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Form::open(array('action' => 'NavigationController@navupdate')) }}
					{{ csrf_field() }}
					@foreach($navs as $nav)
						{{ Form::checkbox($nav->navigationLink, $nav->id, $nav->navactivated) }} {{ $nav->navigationName }}<br/>
					@endforeach
					<br/>
					{{ Form::submit() }}
					{{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
