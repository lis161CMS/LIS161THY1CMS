@extends('layouts.app')

@section('content')
<h3>Select navigation links</h3>

<form action="#" method="post">
	<input type="checkbox" name="navigationName[]" value="Home">Home</input>
	<input type="checkbox" name="navigationName[]" value="Link1">Link1</input>
	<input type="checkbox" name="navigationName[]" value="Link1">Link2</input>
	<input type="submit" name="submit" value="Submit"/>
</form>
@endsection