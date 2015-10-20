
@extends('layoutadmin')

@section('content')
{{Form::model($user, array('route' => array('admin.user', $user->id)))}}
    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
    <fieldset>
        @if (Cache::remember('username_in_confide', 5, function() {
            return Schema::hasColumn(Config::get('auth.table'), 'username');
        }))
        <div class="form-group">
           {{ Form::label('username', Lang::get('confide::confide.username')) }}
           {{ Form::text('username',null,array('class' => 'form-control','placeholder'=>Lang::get('confide::confide.username'))) }}           
        </div>
        @endif
        <div class="form-group">
               {{ Form::label('email', Lang::get('confide::confide.e_mail')) }} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small>
               {{ Form::text('email',null,array('class' => 'form-control','placeholder'=>Lang::get('confide::confide.e_mail'))) }} 

        </div>
        <div class="form-group">
               {{ Form::label('password', Lang::get('confide::confide.password')) }}
               {{ Form::password('password',array('class' => 'form-control','placeholder'=> Lang::get('confide::confide.password'))) }} 
        </div>
        <div class="form-group">
               {{ Form::label('password_confirmation', Lang::get('confide::confide.password')) }}
               {{ Form::password('password_confirmation',array('class' => 'form-control','placeholder'=> Lang::get('confide::confide.password_confirmation'))) }} 
        </div>
        <div class="form-group">
               {{ Form::label('first_name'),'First Name' }}
               {{ Form::text('first_name',null,array('class' => 'form-control','placeholder'=> 'First Name')) }} 
        </div>
        <div class="form-group">
               {{ Form::label('last_name'),'Last Name' }}
               {{ Form::text('last_name',null,array('class' => 'form-control','placeholder'=> 'Last Name')) }} 
        </div>
        <div class="form-group">
               {{ Form::label('phone','Phone') }}
               {{ Form::text('phone',null,array('class' => 'form-control','placeholder'=> 'Phone')) }} 
        </div>
        <div class="form-group">
            <label class="control-label">Select Location</label>
                {{ Form::select('location_id', $locations, null ,array('class' => 'form-control')) }}
        </div
        <div class="form-group">
            <label class="control-label">Select Group</label>
                {{ Form::select('user_group', $roles, $user->roles,array('class' => 'form-control')) }}
        </div>
        @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                @endif
            </div>
        @endif

        @if (Session::get('notice'))
            <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <div class="form-actions form-group">
          <button type="submit" class="btn btn-primary">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
        </div>

    </fieldset>
    {{ Form::close() }}

@stop
