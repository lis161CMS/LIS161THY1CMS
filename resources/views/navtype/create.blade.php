@extends('home')

@section('content')
<form method="post" action="{{url('navtype')}}">
	<h3> Enter desired navigation type</h3>
	<div class="form-group">
		{{ csrf_field() }}
		<input type="text" name="navigationType" placeholder="Sidebar or Topbar" />
	</div>
	<h3> Enter your user ID</h3>
	<div class="form-group">
		<input type="text" name="user" placeholder="1 or 2" />
	</div>
	<input type="submit" />
</form>

@endsection
