
@extends('layout')

@section('content')
    <hr>
    <div class="col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Create a New Quote</h4>
            </div>
            <div class="panel-body">
            {{ Form::open(array('url' => 'quote', 'class'=>'form-horizontal')) }}
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="email" class="col-sm-2 control-label">Choose Event</label>
                            </div>
                            <div class="col-sm-9">
                                {{ Form::select('category', $category, array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input class="form-control required" type="text" name="total_guests"
                                       placeholder="About How Many People Will Be There?" title="About how many people will be there?"
                                       id="attendees"/>
                            </div>
                            <div class="col-sm-3">
                                {{ Form::text('start_date', '',array('class' => 'form-control datepicker','placeholder'=>'Start Date')) }}
                            </div>
                            <div class="col-sm-3">
                            {{ Form::text('end_date', '',array('class' => 'form-control datepicker', 'placeholder'=>'End Date')) }}
                                <input type="checkbox" name="agreement" class="condit" value="Do you agree to the terms and conditions"/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div id="stprice" class="col-sm-7 col-sm-offset-3 centered">
                           	 Starting Price <input id="startprice" name="sub_total" value="$125" readonly/>
                            </div>
                            <button class="btn btn-primary pull-right" type="submit" id="startquotebtn">Start Quote</button>
                        </div>
                        <input type="hidden" name="firstflight" value=""/>
                {{ Form::close() }}               
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
        @if(Auth::check())
            <div class="panel-heading">
                <h4>Hello {{ Auth::user()->username }}</h4>
                <ul>
                	<li>{{ HTML::link('/backend', 'admin', array('id' => 'linkid'), true)}}</li>
                </ul>
            </div>
        	
        @else
             <div class="panel-heading">
                <h4>Login</h4>
            </div>
            <div class="panel-body">
                <div class="loginPageForm shadow">
					 <form role="form" method="POST" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">
					    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
					    <fieldset>
					        <div class="form-group">
					            <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
					            <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
					        </div>
					        <div class="form-group">
					        <label for="password">
					            {{{ Lang::get('confide::confide.password') }}}
					        </label>
					        <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
					        <p class="help-block">
					            <a href="{{{ URL::to('/users/forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
					        </p>
					        </div>
					        <div class="checkbox">
					            <label for="remember">
					                <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide::confide.login.remember') }}}
					            </label>
					        </div>
					        @if (Session::get('error'))
					            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
					        @endif

					        @if (Session::get('notice'))
					            <div class="alert">{{{ Session::get('notice') }}}</div>
					        @endif
					        <div class="form-group">
					            <button tabindex="3" type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.login.submit') }}}</button>
					        </div>
					    </fieldset>
					</form>               
                </div>
            </div> 
            @endif          
        </div>
    </div>
    <div class="col-md-12">
        <hr class="">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="">First Flight Content Area</h4>
            </div>
            <div class="panel-body">
                Content
            </div>
        </div>
    </div>
@stop
