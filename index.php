<?php

//if you clicked the button, you will need to set the cookie. Will do this now.
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    setcookie("page", $page);
}
    //setup $page & determen if new.
    elseif(isset($_COOKIE["page"])) { 
        $page = $_COOKIE["page"]; //not new user. will move to page last seen by cookie.
    }
        else {
            $welcome = true; //new user
            $page = 0;
            setcookie("page", 000000); //now NOT new user
        } 


//regular risplay of text
$textPath = "./comicfiles/".$page."/lines.txt";

$text = file_get_contents($textPath, FILE_USE_INCLUDE_PATH);

//image
$image = "./comicfiles/".$page."/image.png";
?>


<!DOCTYPE html>

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
    <link href="./htmladd/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./htmladd/offcanvas.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./htmladd/ie10-viewport-bug-workaround.js"></script>

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
          <a class="navbar-brand" href="./">Web Comic</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">Comic</a></li>
            <li><a href="./store">Store</a></li>
            <li><a href="./about">About/Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Recent Updates</button>
          </p>
          <br>
            
          <div class="jumbotron">
            <center><p><h1>Web Comic</h1></p></center>
            <center><p><img src="<?php echo $image;?>" width="100%" hight="100%"></p></center>
            <center><h5><?php echo $text;?></h5></center>
            <br>
            <center><p><a href="./?page=<?php echo $page+1;?>"><button class="btn btn-info btn-sm">==></button></a></p></center>
          </div>
            
            <!-- Place contents of row.html here for best result. -->

        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <h3>Recent Updates</h3>
          <div class="list-group">
            <a href="./" class="list-group-item active">Page 1</a>
            <a href="./" class="list-group-item">Page 2</a>
            <a href="./" class="list-group-item">Page 3</a>
            <a href="./" class="list-group-item">Page 4</a>
            <a href="./" class="list-group-item">Page 5</a>
            <a href="./" class="list-group-item">Page 6</a>
            <a href="./" class="list-group-item">Page 7</a>
            <a href="./" class="list-group-item">Page 8</a>
            <a href="./" class="list-group-item">Page 9</a>
            <a href="./" class="list-group-item"></a>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© Web Comic 2014</p>
      </footer>

    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./htmladd/jquery.min.js"></script>
    <script src="./htmladd/bootstrap.min.js"></script>
    <script src="./htmladd/offcanvas.js"></script>

</body>
</html>