<?php
if(isset($_COOKIE['islogin'])) {
    header("location:index.php");
    exit;
  }
  


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
<body class="bg-gradient-info">
<div class="container ">
<div class="row justify-content-center">
<div class="content">
    <br>
<div class="panel panel-info col-xl-6 col-lg-6 col-md-9">
			<div class="panel-heading">
				<b>Login Admin</b>
			</div>
			<div class="panel-body">

            <form action="" method="post">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required />

    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukan Password" required/>

    </div>
    <div class="form-group">
        <input type="submit" name="login" class="form-control"  value="Login"/>

    </div>
    
    
</from>
			</div>			
		</div>


</div>
</div>
</div>

<?php

include 'koneksi.php';

if (isset($_POST['login'])) {
  $uname=(isset($_POST['username'])? $_POST['username']:'');
  $ps=(isset($_POST['password'])? $_POST['password']:'');
  $pswd=md5($ps);
  $q=mysqli_query($conn,"SELECT * FROM admin WHERE id_admin='$uname' AND password='$pswd'");
  $cek=mysqli_fetch_array($q);
  if ($cek) {
    setcookie('idagency', $cek['id_admin'], time()+(3600 * 24));
    setcookie('nama', $cek['name'], time()+(3600 * 24));
    setcookie('islogin', true, time()+(3600 * 24));
    // setcookie('profil', 'assets/operator/'.$cek['profil'], time()+(3600 * 24));
    header("location:index.php");
    // echo "<script>top.location='index.php'</script>";
  } else {
    echo "<script>alert('Invalid Username or Password')</script>";
  }
}
?>
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

