
@extends('layout')

@section('content')
<div class="col-md-12">
<h3>Basic Information</h3>
<fieldset>
    <legend>Applicant -
        <small>Please note Event Coverage is not available in Kentucky, Illinois and Alaska.</small>
    </legend>
    {{ Form::open(array('url' => 'foo/bar', 'class'=>'form-horizontal')) }}
    <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="quoteEventName">Applicant Name</label>

                    <div class="col-sm-7">
                        {{ Form::text('applicant_name', '',array('class' => 'form-control required')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="applicant_address">Address</label>

                    <div class="col-sm-7">
                        {{ Form::text('applicant_address','',array('class' => 'form-control required')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="quotePropertyName">Event City</label>

                    <div class="col-sm-7">
                        {{ Form::text('applicant_city','',array('class' => 'form-control required')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="quotePropertyName">Zip Code</label>

                    <div class="col-sm-7">
                        {{ Form::text('applicant_zip_code','',array('class' => 'form-control required')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">State</label>

                    <div class="col-sm-7">
                        {{ Form::select('location_state', $states, array('class' => 'form-control')) }}
                    </div>
                </div>
                <a href="/quote/create">Back</a>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-5 control-label" for="quoteEventTotalGuests">Phone</label>

                    <div class="col-sm-3">
                        {{ Form::text('phone', '',array('class' => 'form-control required', 'placeholder'=>'Phone')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">Fax</label>

                    <div class="col-sm-5">
                        {{ Form::text('fax','' ,array('class' => 'form-control datepicker','placeholder'=>'Fax')) }}
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label">Email</label>

                    <div class="col-sm-5">
                        {{ Form::text('end_date', Session::get('email'),array('class' => 'form-control datepicker', 'placeholder'=>'Email')) }}
                    </div>
                </div>

    </div>
    <button class="btn btn-primary pull-right" type="submit" id="startquotebtn">Continue</button>
</fieldset> 
</div>
{{ Form::close() }}   
@stop
