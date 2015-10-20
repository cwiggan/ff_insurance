
@extends('layoutadmin')

@section('content')
     <!-- upper section -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Users</a></li>
  
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
          <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Access Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->profile['first_name'] }}</td>
                    <td>{{ $user->profile['last_name']}}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    @foreach($user->roles as $role)
                        {{ Form::select('user_group', $roles, $role->id,array('class' => 'form-control')) }}
                    @endforeach
                    
                    </td>
                    <td><a href="admin/user/{{ $user->id }}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>         
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
         <table class="table table-striped"> 
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Access Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                    @foreach($user->roles as $role)
                        {{ Form::select('user_group', $roles, $role->id,array('class' => 'form-control')) }}
                    @endforeach
                    
                    </td>
                    <td><a href="admin/user/{{ $user->id }}">Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>          
    </div>

  </div>

@stop
