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
                </tr>
            </thead>

            <tbody>
                @php
                    $navs = DB::table('navigations')->where('navactivated',1)->get();
                @endphp
                @foreach($permission as $p)
                        @foreach($navs as $nav)
                        @if($p->role_id == 1 && (($p->id == $nav->id + 3)||($p->id == $nav->id + 6)))
                            <tr>
                                <td>{{ $p->permission }}</td>
                                <td>{{ $p->created_at->format('F d, Y h:ia') }}</td>
                                <td>Admin</td>
                            </tr>
                        @elseif(($p->role_id == 2) && ($p->id == $nav->id))
                            <tr>
                                <td>{{ $p->permission }}</td>
                                <td>{{ $p->created_at->format('F d, Y h:ia') }}</td>
                                <td>User</td>
                            </tr>
                        @endif
                        @endforeach
                @endforeach
            </tbody>

        </table>
    </div>
  </div>
@endsection
