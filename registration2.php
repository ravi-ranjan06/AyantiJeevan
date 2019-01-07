<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AyantiJeevan</title>
<!-- morris -->
	<link href="assets/css/morris.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css" />
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
<!-- adminui main css -->
	<link href="assets/css/main.css" rel="stylesheet">
	<!-- green theme css -->
	<link href="assets/css/green.css" rel="stylesheet">
	<!-- media css for responsive  -->
	<link href="assets/css/main.media.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<!--[if lt IE 9]> <script src="dist/html5shiv.js"></script> <![endif]-->
</head>
<body class="green-bg login">
	<div class="text-center top20">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">         
				<div class="widgets-container"><b><font class="text-info"><img src="assets/img/ayantilogo.png" style="height:100px"><h2>Registration</h2></font></b></div>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div id="displayResults">
			<div class="row top20">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<div class="form-group">
						<div class="input-icon"> <i class="fa fa-user"></i>
							<input type="text" class="form-control" id="firstName" name="firstName" placeholder="FirstName">
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="form-group">
						<div class="input-icon"> <i class="fa fa-user"></i>
							<input type="text" class="form-control" id="lastName" name="lastName" placeholder="LastName">
						</div>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>  
				<div class="col-lg-3">
					<div class="form-group">
						<div class="input-icon"> <i class="fa fa-calendar"></i>
							<input type="text" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" value="">
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="form-group">
						<div class="input-group">
							<select class="selectpickerwarning" id="gender" name="gender" value="">
								<option default>Select Gender</option>
								<option value="Female">Female</option>
								<option value="Male">Male</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<div class="form-group">
						<div class="input-icon"> <i class="fa fa-user"></i>
							<input type="text" class="form-control" id="userName" name="userName" placeholder="User Name" readonly="">
						</div>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<div class="form-group">
						<div class="input-icon"> <i class="fa fa-eye"></i>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="form-group">
						<div class="input-icon"> <i class="fa fa-eye"></i>
							<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
						</div>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<a href="#" class="btn btn-round btn-warning text-uppercase col-lg-12">Save & Continue</a>
				</div>				
				<div class="col-lg-3"></div>
			</div>
		</div>
	</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/js/vendor/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="assets/js/vendor/bootstrap.min.js"></script>
	<!-- slimscroll js -->
	<script type="text/javascript" src="assets/js/vendor/jquery.slimscroll.js"></script>
	<script src="assets/js/vendor/select2.min.js"></script>
	<script src="assets/js/vendor/bootstrap-select.min.js"></script>
	<!-- pace js -->
<script src="assets/js/vendor/pace/pace.min.js"></script>
<!-- Sparkline -->
<script src="assets/js/vendor/jquery.sparkline.min.js"></script>
<!-- main js -->
	<script src="assets/js/main.js"></script>
<script type="text/javascript">
$(function() {
    $('.selectpickerwarning').selectpicker({
        style: 'btn',
        size: 4
    });
});
</script>
</body>
</html>