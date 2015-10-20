
@extends('layoutadmin')

@section('content')

    
    <fieldset ng-controller="formController">
    {{Form::model($dropdown, array('route' => array('field.update', $dropdown->id)))}}
      <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
        <div class="form-group">
           {{ Form::label('text', 'Name') }}
           {{ Form::text('text',null,array('class' => 'form-control')) }}           
        </div>

        
        <h2>Values</h2>
        @foreach ($dropdown->options as $field)

          <div class="form-group">
                 {{ Form::text('options['.$field->id.'][id]',$field->value,array('class' => 'form-control','placeholder'=> 'Value' )) }} 
          </div>       
        @endforeach
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
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add More Option</button>
        </div>
    {{ Form::close() }}

    </fieldset>
    
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add More OPtions</h4>
      </div>
      <div class="modal-body">
        {{Form::model($dropdown, array('route' => array('field.update', $dropdown->id)))}}
           <div class="form-group">
                 {{ Form::text('options',null,array('class' => 'form-control','placeholder'=> 'Value' )) }} 
          </div>          
        {{ Form::close() }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@stop
