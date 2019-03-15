<?php
session_start();
require_once('db.php');

$id = $_GET['id'];
$query_string ="SELECT * FROM event1 WHERE id=$id";
$db_return = mysqli_query($db_connection, $query_string);
$after_assoc = mysqli_fetch_assoc($db_return);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Concert</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Event Display</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="#services" class="page-scroll">Payment</a></li>
        <li><a href="login.php" target="_blank" class="page-scroll">Dashboard</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>


<!-- Services Section -->
<div id="services">
  <div class="container">

        <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h2>Payment Option</h2>

        <form action="contactpost1.php" method="post">
          <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" name ="email" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label >Payment</label>
            <input type="number"  name="payment" value="<?=$after_assoc['payment']?>" disabled class="form-control" placeholder="Payment" required>
          </div>
          <div class="form-group">

            <input type="hidden"  name="id" value="<?=$id?>">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>




			</div>
      </div>

    </div>
    </div>

    <div id="contact">
      <div class="container">
        <div class="col-md-3 col-md-offset-1 contact-info">
          <div class="contact-item">
            <h4>Contact Info</h4>
            <p><span>Address</span>XXXXX YYYYY St,<br>
              ZZZZZZZ, 12345</p>
          </div>
          <div class="contact-item">
            <p><span>Phone</span> +88017XXXXXXX</p>
          </div>
          <div class="contact-item">
            <p><span>Email</span> aaa@company.com</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Section -->
    <div id="footer">
      <div class="container text-center">
        <p>&copy; 2017 Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    </body>
    </html>
