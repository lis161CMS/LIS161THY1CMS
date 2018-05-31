@extends('layouts.nav')

@section('content')
<form method="post" action="{{url('navtype')}}">
	<h3> Enter desired navigation type</h3>
	<div class="form-group">
		{{ csrf_field() }}
		<input type="radio" name="navigationType" value="sidebar">Sidebar
		<input type="radio" name="navigationType" value="topbar">Topbar
	</div>
	<h3> Choose which user has this navigation type</h3>
	<div class="form-group">
		<input type="radio" name="user" value="1">Guest
		<input type="radio" name="user" value="2">Admin
	</div>
	<input type="submit" />
</form>

@endsection
