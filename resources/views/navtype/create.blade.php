@extends('home')

@section('content')
	<h3> Enter desired navigation type</h3>
	<div class="form-group">
		{{ csrf_field() }}
		<input type="text" name="navigationType" placeholder="Sidebar or Topbar" />
	</div>
@endsection