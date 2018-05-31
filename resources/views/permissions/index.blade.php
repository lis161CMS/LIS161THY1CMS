@extends('layouts.nav')

@section('content')
<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Permissions
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Permission</th>
                    <th>Date/Time Added</th>
                    <th>Given to</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($permission as $p)
                <tr>
                    <td>{{ $p->permission }}</td>
                    <td>{{ $p->created_at->format('F d, Y h:ia') }}</td>
                        @if($p->role_id == 1)
                          <td>Admin</td>
                        @elseif ($p->role_id == 2)
                          <td>User</td>
                        @endif
                    <td>
                    <a href="{{ route('permissions.edit', [$p->id]) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $p->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

  </div>
@endsection
