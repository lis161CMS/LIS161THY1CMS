@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Permission</div>

                <div class="panel-body">
                  {!! Form::model($permissions, [
                      'route' => ['permissions.update', $permissions->id],
                      'class' => 'form-horizontal',
                      'method' => 'PUT'
                    ])
                  !!}

                  <div class="form-group{{ $errors->has('permission') ? ' has-error' : '' }}">
                      <label for="permission" class="col-md-4 control-label">Permission</label>

                      <div class="col-md-6">
                          {!! Form::text('permission', NULL, ['class'=>'form-control']) !!}

                          @if ($errors->has('permission'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('permission') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                      <label for="role_id" class="col-md-4 control-label">Who will the permission be given to? (1=Admin, 2=User)</label>

                      <div class="col-md-6">
                          {!! Form::text('role_id', NULL, ['class'=>'form-control']) !!}

                          @if ($errors->has('role_id'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('role_id') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Save
                          </button>
                      </div>
                  </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
