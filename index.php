<?php

if (!isset($_COOKIE['islogin'])) {
    header("location:login.php");
  } else{
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>OTO Mudiak</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    

        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    OTO Mudiak
                </a>
            </div>
<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';

?>
            <ul class="nav">
                <li class=<?php if($page=='home' || $page==null) {echo "active";}?>>
                    <a href="?page=home">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class=<?php if($page=='user' || $page==null) {echo "active";}?>>
                    <a href="?page=user">
                        <i class="pe-7s-user"></i>
                        <p>Client</p>
                    </a>
                </li>
                <li class=<?php if($page=='topup' || $page==null) {echo "active";}?>>
                    <a href="?page=topup">
                        <i class="pe-7s-note2"></i>
                        <p>Top Up</p>
                    </a>
                </li>
                <li class=<?php if($page=='customer' || $page==null) {echo "active";}?>>
                    <a href="?page=customer">
                        <i class="pe-7s-headphones"></i>
                        <p>Customer</p>
                    </a>
                </li>

               
               
            </ul>
    	</div>
    </div>
    <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php
                        if($page=='home' || $page==null) {echo "Dashboard";}
                        elseif($page=='user' || $page==null) {echo "List Client";}
                        elseif($page=='topup' || $page==null) {echo "Top Up ";}
                        elseif($page=='customer' || $page==null) {echo "List Customers ";}
                    ?>
                    </a>



                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


<?php  include 'main.php'; ?>
</div>



    <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.oto-mudiak.co.id">Oto Mudiak</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	
</html>

<?php
  }
  ?>

