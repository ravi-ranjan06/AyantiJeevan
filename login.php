<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ayanti Jeevan</title>
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- slimscroll -->
	<link href="assets/css/jquery.slimscroll.css" rel="stylesheet">
	<!-- Fontes -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet">
	<!-- all buttons css -->
	<link href="assets/css/buttons.css" rel="stylesheet">
	<!-- animate css -->
	<link href="assets/css/animate.css" rel="stylesheet">
	<!-- top nev css -->
	<link href="assets/css/page-header.css" rel="stylesheet">
	<!-- aj main css -->
	<link href="assets/css/main.css" rel="stylesheet">
	<!-- green theme css -->
	<link href="assets/css/green.css" rel="stylesheet">
	<!-- media css for responsive  -->
	<link href="assets/css/main.media.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>

<body class="green-bg login">
	<div class="middle-box text-center loginscreen ">
		<div class="widgets-container">
			<div>
				<h1 class="logo-name"><img src="assets/img/ayantilogo.png"></h1>
			</div>
			<h3>Welcome to Ayanti Jeevan</h3>
			<!-- <p>fully responsive admin dashboard template built with Bootstrap Framework, HTML5 and CSS3, Media query. </p> -->
			<p>Login in. To see it in action.</p>
			<form action="loginValidation" class="top15" method="POST">
				<div class="form-group">
					<input type="text" requigreen="" placeholder="userName" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="password" requigreen="" placeholder="Password" class="form-control" required>
				</div>
				<!-- <div class="form-group ">
					<span><input type="checkbox" requigreen="" onclick="showPassword()"> Show Password</span>
					&nbsp;&nbsp;&nbsp;
					<span><input type="checkbox" requigreen="" onclick="showPassword()"> Remember Me</span>
				</div> -->
				<button class="btn green block full-width  bottom15" type="submit">Login</button>
				<a href="forgot_password.html"><small>Forgot password?</small></a>
				<p class="text-muted text-center"><small>Do not have an account?</small></p>
				<a href="registration.php" class="btn btn-sm btn-white btn-block">Create an account</a>
			</form>
			<p class="top15"><small><font class="text-info">Copyright &copy; <?php echo date("Y"); ?>-<?php echo date('Y', strtotime('+1 year'));?> AyantiJeevan. All Rights Reserved.</font></small></p>
		</div>
	</div>
</body>

</html>