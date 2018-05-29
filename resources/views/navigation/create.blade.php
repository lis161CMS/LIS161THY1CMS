@extends('layouts.app')

@section('content')
<h3>Select navigation links</h3>
<form action="{!! URL::to('navigation')!!}" method="post">
	<select name="navigationName[]" multiple>

		<option value="Home">Home</option>
		{{ Form::hidden('navigationLink', 'Home') }}
		<input name="navigationLink" type="hidden" value="Home">home
		{!! Form::close() !!}

		<option value=Link 1">Link 1</option>
		{{ Form::hidden('navigationLink', 'link1') }}
		<input name="navigationLink" type="hidden" value="Home">link1
		{!! Form::close() !!}

		<option value="Link 2">Link 2</option>
		{{ Form::hidden('navigationLink', 'link2') }}
		<input name="navigationLink" type="hidden" value="link2">link2
		{!! Form::close() !!}

	</select>
	<input type="submit" name="submit" value="Get Selected Values" />
</form>

@endsection