@extends('layouts.nav')

@section('content')

    <h1><i class="fa fa-users"></i> User Administration
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>Role</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($user as $u)
                <tr>
                    <td>{{ $u->firstName }}</td>
                    <td>{{ $u->middleName }}</td>
                    <td>{{ $u->lastName }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->created_at->format('F d, Y h:ia') }}</td>
                        @if($u->role_id == 1)
                          <td>Admin</td>
                        @elseif ($u->role_id == 2)
                          <td>User</td>
                        @endif
                    <td>
                    <a href="{{ route('users.edit', [$u->id]) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $u->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
