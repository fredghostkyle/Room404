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

    <title>Room 404 | Page Placment</title>

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
          <a class="navbar-brand" href="../../">Room 404</a>
        </div>
        <div class="collapse navbar-collapse navbar-left">
          <ul class="nav navbar-nav">
            <li><a href="../../">Comic</a></li>
            <li><a href="../../store">Store</a></li>
            <li><a href="../../about">About/Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"> </span><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li role="presentation" class="dropdown-header"><span class="glyphicon glyphicon-file"></span> Page Placment</a></li>
                  <li><a href="../../?save="><span class="glyphicon glyphicon-floppy-save"></span> Save current page (automatic)</a></li>
                  <li><a href="../../?reset="><span class="glyphicon glyphicon-fire"></span> Reset page placment</a></li>
                  <li class="active"><a href="../../comicfiles/workings"><span class="glyphicon glyphicon-info-sign"></span> Info on page placment/saving</a>
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
            <center><p><h1>Page Placment Help</h1></p></center>
            <center><h4>Don't understand how our Page Placment system works? Thats okay! First thing to know is that we use cookies. If you have cookies dissabled this feature will not work. Next off our system saves the last page you were on. So, for example if you stoped reading on page 10. Then come back later (assuming you have no cleared cookies) you should auto load to page 10. You can also clear the system (reset it to page 1) or save (automaticly done) based off the page your currently on. Just click the cog in the top right, If you still need help email the Web Developer-<a href="mailto:fredghoskyle@yahoo.com?subject=WebComic Page Placment Help">Kyle</a>!</h5></center>
            <br>
          </div>
      
      <br>

      <hr>

      <footer>
        <p>© Room 404 2014</p>
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