
@extends('layoutadmin')

@section('content')

    
    <fieldset ng-controller="formController">
    {{Form::model($location, array('route' => array('loc.update', $location->id)))}}
      <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <div class="form-group">
           {{ Form::label('name', 'Name') }}
           {{ Form::text('name',null,array('class' => 'form-control')) }}           
        </div>
        <div class="form-group">
           {{ Form::label('address', 'Address') }}
           {{ Form::text('address',null,array('class' => 'form-control')) }}           
        </div>
        <div class="form-group">
           {{ Form::label('city', 'City') }}
           {{ Form::text('city',null,array('class' => 'form-control')) }}           
        </div>
        <div class="form-group">
           {{ Form::label('state', 'State') }}
           {{ Form::text('state',null,array('class' => 'form-control')) }}           
        </div>
        <div class="form-group">
           {{ Form::label('zip_code', 'Zip Code') }}
           {{ Form::text('zip_code',null,array('class' => 'form-control')) }}           
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
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    {{ Form::close() }}

    </fieldset>
    

@stop
