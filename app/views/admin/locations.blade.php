
@extends('layoutadmin')

@section('content')
     <!-- upper section -->
  <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#">Home</a>
      </li>
      <li><a href="#">...</a></li>
      <li><a href="#">...</a></li>
    </ul>

    <div role="tabpanel" class="tab-pane" id="messages">
        {{ HTML::linkRoute('loc.create', 'Create',array(),array('class'=>'btn btn-default pull-right')) }}
         <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>Location Name</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($location as $loc)
                <tr>
                    <td>{{$loc->name}}</td>
                    <td>{{$loc->city}}</td>
                    <td>{{$loc->state}}</td>
                    <td>{{ HTML::linkRoute('loc.edit', 'Edit', array($loc->id)) }}</td>
                </tr>
           @endforeach
            </tbody>
        </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">

    </div>


@stop
