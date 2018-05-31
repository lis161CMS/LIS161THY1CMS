@extends('layouts.nav')

@section('content')
<div class="container">
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<div class="card-body">
<form method="post" action="{{url('navtype')}}">
	<h3> Enter desired navigation type</h3>
	<div class="form-group">
		{{ csrf_field() }}
		<input type="radio" name="navigationType" value="sidebar">Sidebar
		<input type="radio" name="navigationType" value="topbar">Topbar
	</div>
	<h3> Enter your first name</h3>
	<div class="form-group">
		<input type="text" name="name"/>
	</div>
	<input type="submit" />
</form>
</div>
</div>
</div>
</div>
</div>

@endsection
