@extends('layouts.app')

@section('content')
<h3>Select navigation links</h3>
<form action="{!! URL::to('navigation')!!}" method="post">
	{{ csrf_field() }}
	<input type="checkbox" name="navigationName[]" value="Home">Home</input>
	<input type="checkbox" name="navigationName[]" value="Link1">Link1</input>
	<input type="checkbox" name="navigationName[]" value="Link1">Link2</input>
	<input type="submit" name="submit" value="Submit"/>
</form>

<?php
	function IsSelected($name,$value){
		foreach($_POST[$name] as $checkvalue)
		{
			if($checkvalue == $value){
				return true;
			}
		}
	}

	if(IsSelected('navigationName', 'Home')){
		<input type="checkbox" name="navigationName[]" value="Link1">Link1</input>;
	}
?>
@endsection