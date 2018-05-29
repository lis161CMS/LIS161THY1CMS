@extends('layouts.app')

@section('content')
<h3>Select navigation links</h3>
<form action="{!! URL::to('navigation')!!}" method="post">

		<input type="checkbox" name="navigationName[]" value="Home" /> Home <br/>
		{{ Form::hidden('navigationLink', 'Home') }}
		<input name="navigationLink" type="hidden" value="Home">home
		{!! Form::close() !!}

		<input type="checkbox" name="navigationName[]" value="link1" /> Link 1 <br/>
		{{ Form::hidden('navigationLink', 'link1') }}
		<input name="navigationLink" type="hidden" value="Home">link1
		{!! Form::close() !!}

		<input type="checkbox" name="navigationName[]" value="link2" /> Link 2 <br/>
		{{ Form::hidden('navigationLink', 'link2') }}
		<input name="navigationLink" type="hidden" value="link2">link2
		{!! Form::close() !!}
	<input type="submit" name="submit" value="Get Selected Values" />
</form>

@endsection
