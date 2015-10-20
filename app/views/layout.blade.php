<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{% block title %}Welcome!{% endblock %}</title>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>
    {{ HTML::script('app.js') }}
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    {{ HTML::style('css/site.css') }}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-app="formApp">
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
        <div class="container"> @yield('content')</div>
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

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
