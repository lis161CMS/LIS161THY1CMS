@extends('layouts.app')

@section('content')

<h3>Navigations for User</h3>
<br/><br/>
{{ Form::open(array('action' => 'NavigationController@myupdate')) }}
{{ csrf_field() }}
@foreach($navs as $nav)
	{{ Form::checkbox($nav->navigationLink, $nav->id, $nav->navactivated) }} {{ $nav->navigationName }}<br/>
@endforeach
{{ Form::submit() }}
{{ Form::close() }}

@endsection