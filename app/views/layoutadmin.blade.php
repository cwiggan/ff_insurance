<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>First Flight Admin</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
    <script src="//code.angularjs.org/1.4.7/angular-route.js"></script>

    {{ HTML::script('app_admin.js') }}
    {{ HTML::style('css/site.css') }}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-app="adminApp">
  <nav class="navbar navbar-default navbar-blue">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">First Flight</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
 <div class="row">
        <div class="col-sm-3">
            <!-- left -->
            <h3 class=""><span class="glyphicon glyphicon-th-list"></span> Menu</h3>

            <hr class="">
            <ul class="nav nav-stacked">
                <li><b>User Menu</b></li>
                <li><a href="/admin"><i class="glyphicon glyphicon-user"></i> Manage Users</a></li>
                <li><a href="/admin/create/user"><i class="glyphicon glyphicon-plus"></i> Create A User</a></li>
                <li><b>Quote Menu</b></li>
                <li><a href="/admin/create/quote" class=""><i class="glyphicon glyphicon-plus"></i> Create A Quote</a></li>
                <li><a href="/admin/myquotes" class=""><i class="glyphicon glyphicon-inbox"></i> My Quotes</a></li>
                <li><a href="/admin/quotes" class=""><i class="glyphicon glyphicon-list"></i> Manage All Quotes</a></li>
                <li><a href="/admin/system" class=""><i class="glyphicon glyphicon-cog"></i> Edit Quote System Settings</a></li>
                <li><a href="/admin/dashboard/quotepricing" class=""><i class="glyphicon glyphicon-time"></i> Edit Quote Pricing</a></li>
            </ul>
            <hr class="">
        </div>
        <!-- /span-3 -->
        <div class="container">
            <!-- column 2 -->
            <h3 class=""><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>
            <hr class="">
            <!--tabs-->
            <div class="col-sm-9">
                @yield('content')

            </div>
            <!--/tabs-->
        </div>
        <!--/col-span-9-->
    </div>
    <!--/row-->
    <!-- /upper section -->
    <!-- lower section -->
    <div class="row">
        <div class="col-md-8">
            <hr class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="">New Requests</h4>

                </div>
                <div class="panel-body">
                    <div class="list-group"><a href="#" class="list-group-item active">Hosting virtual mailbox
                            serv..</a>

                        <a href="#" class="list-group-item">Dedicated server doesn't..</a> <a href="#"
                                                                                              class="list-group-item">RHEL
                            6 install on new..</a>

                    </div>
                </div>
            </div>
            <hr class="">
            <div class="alert alert-info" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Please remember to <a href="#" class="">Logout</a> for classified
                security.
            </div>
        </div>
        <div class="col-md-4">
            <hr class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title"><i class="glyphicon glyphicon-wrench pull-right"></i>

                        <h4 class="">Submit Request</h4>

                    </div>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical">
                        <div class="control-group">
                            <label class="">Name</label>

                            <div class="controls">
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="">Title</label>

                            <div class="controls">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="">Details</label>

                            <div class="controls">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="">Select</label>

                            <div class="controls">
                                <select class="form-control">
                                    <option class="">General Question</option>
                                    <option class="">Server Issues</option>
                                    <option class="">Billing Question</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class=""></label>

                            <div class="controls">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/panel content-->
            </div>
            <!--/panel-->
            <div class="panel panel-default"></div>
            <!--/panel-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
 </div>
    <footer class="footer">
        <div class="container" style="padding-top:20px;">
            <div class="row">
                <div class="col-md-4">
                    <p class="lead"><?php //echo $this->output->FooterLeftColumnHeader; ?></p>

                    <p><?php //echo $this->output->FooterLeftColumnContent; ?></p>
                </div>
                <div class="col-md-4">
                    <p class="lead"><?php //echo $this->output->FooterCenterColumnHeader; ?></p>

                    <p><?php //echo $this->output->FooterCenterColumnContent; ?></p>
                </div>
                <div class="col-md-4">
                    <p class="lead"><?php //echo $this->output->FooterRightColumnHeader; ?></p>

                    <p><?php //echo $this->output->FooterRightColumnContent; ?></p>
                </div>
            </div>
            <div class="row">
                <p class="text-center small">
                    &copy; <?php date_default_timezone_set('America/New_York');
                    echo date('Y'); ?> FirstFlight Insurance - 4112 N. Croatan Highway Kitty Hawk NC. 27949<br>
                    Microcharged Inc. http://www.microcharged.com
                </p>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	  <script>
	  $(function() {
	    $( ".datepicker" ).datepicker();
	  });
	 </script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
