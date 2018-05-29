@extends('layouts.app')

@section('content')
<form method="post" action="{{url('navigation')}}">
	<h3>Enter the navigation link</h3>
	{{ csrf_field() }}
	<div class="form-group">
		<label for="navigationName">Name</label>		
		<input type="text" name="navigationName"/>
	</div>
	<div class="form-group">
		<label for="navigationLink">Link</label>	
		<input type="text" name="navigationLink"/>
	</div>
	<input type="submit" />
</form>
@endsection