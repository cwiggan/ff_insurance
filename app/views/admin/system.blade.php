
@extends('layoutadmin')

@section('content')
     <!-- upper section -->
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Form Fields</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Insurance Option</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Locations</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Categories</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
         <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach ($fields as $field)
                <tr>
                    <td>{{$field->text}}</td>
                    <th>{{$field->type->name}}</th>
                    <td><a href="/admin/field/{{$field->id}}">Edit</a></td>
                </tr>
           @endforeach
            </tbody>
        </table>            
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
         <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>Option Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($options as $opt)
                <tr>
                    <td>{{$opt->name}}</td>
                    <th>{{$opt->price}}</th>
                    <th>{{$opt->type->name}}</th>
                    <td><a href="/admin/opt/{{$opt->id}}">Edit</a></td>
                </tr>
           @endforeach
            </tbody>
        </table>
    </div>
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
         <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach ($category as $cat)
                <tr>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->class}}</td>
                    <th>{{$field->type->name}}</th>
                    <td><a href="admin/loc/{{$field->id}}">Edit</a></td>
                </tr>
           @endforeach
            </tbody>
        </table>  
        {{ $category->links() }}
    </div>
  </div>

@stop
