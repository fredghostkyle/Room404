<?php error_reporting(0); ?>
<!DOCTYPE html>
<!-- saved from url=(0044)http://getbootstrap.com/examples/offcanvas/# -->
<html lang="en">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online Web Comic">
    <meta name="author" content="Website: @fredghostkyle. ">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Web Comic</title>

    <!-- Bootstrap core CSS -->
    <link href="../../htmladd/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../htmladd/offcanvas.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../htmladd/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../../">Web Comic</a>
        </div>
        <div class="collapse navbar-collapse navbar-left">
          <ul class="nav navbar-nav">
            <li><a href="../../">Comic</a></li>
            <li class="active"><a href="../../store">Store</a></li>
            <li><a href="../../about">About/Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
          
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"> </span><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li role="presentation" class="dropdown-header"><span class="glyphicon glyphicon-file"></span> Page Placment</li>
                  <li><a href="#"><span class="glyphicon glyphicon-floppy-save"></span> Save current page (automatic)</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-fire"></span> Reset page placment</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation" class="dropdown-header"><span class="glyphicon glyphicon-file"></span> Page Jump</li>
                  <form class="navbar-form form-group-sm" role="search" method="get" action="../../">
                    <div class="input-group form-group-sm">
                        <input type="text" class="form-control" placeholder="Page #" name="page">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit">Jump</button>
                        </span>
                    </div><!-- /input-group -->
                  </form>
              </ul>
          </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">            
          <div class="jumbotron">
            <center><p><h1>Store</h1></p></center>
        <?php if ($_GET["failed"] == 1) {echo '<div class="alert alert-danger" role="alert"><center>Well shit! You used the wrong username/password combination!</center></div>';}?>
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
    
              <div class="col-md-6">
                  <center>
                      <form role="form" method="post" action="./example.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="username" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                  </center>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="col-md-1"></div>
        </div>
      </div>
      
      <hr>
      <footer>
        <p>© Web Comic 2014</p>
        <p class="pull-right"><a href="login.php">login</a></p>
      </footer>

    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../htmladd/jquery.min.js"></script>
    <script src="../../htmladd/bootstrap.min.js"></script>
    <script src="../../htmladd/offcanvas.js"></script>

</body>
</html>