<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AyantiJeevan</title>
			
			<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
		
			body{
			magrin:0px;
			padding:0px;
			background-color:#44B6AE;
			overflow-x: hidden;
			
			}
			
			h1{
			margin:0;
			padding:0 0 20px;
			text-align:center;
			font-size:22px;
			}
			.loginbox p{
			margin:0;
			padding:0;
			font-weight:bold;
			}
			.loginbox input{
			width:100%;
			margin-bottom:20px;
			}
			.loginbox input[type="text"],input[type="password"],input[type="tel"],input[type="date"],input[type="email"]{
				border:none;
				border-bottom:1px solid black;
				background:transparent;
				outline:none;
				height:40px;
			}
			.loginbox input[type="submit"]{
	        ,input[type="date"]		
			outline:none;
			height:40px;
			background:#ff6666;
			color:#fff;
			font-size:18px;
			border-radius:20px;
			border:none;
			
			}
			.loginbox input[type="submit"]:hover{
			cursor:pointer;
			background:#ffc107;
			color:#000;
			}
			.loginbox a{
			text-decoration:none;
			font-size:12px;
			line-height:20px;
			color:darkgray;
			}
			.loginbox a:hover{
			color:#ffc107;
			}

			p{
				color:grey;
			}

		</style>
			
	</head>
	
	<body>
	
		<div class="row">

			<div class="col-sm-3"></div>

			<div class="col-sm-6" style="background-color: white;margin-top: 80px;margin-bottom:80px;" >
		
				<div class="loginbox">


					<img src="assets/img/ayantilogo.png" style="margin-left: 315px;padding-bottom: 40px"><br>
					<!--<h3 style="margin-left: 220px;padding-bottom: 40px;color:grey">Register Here</h3>-->
	
						<form action="homepage.html" method="post">
					

							<div class="row form-group">
								<div class="col-sm-6">	
									<p>Firstname</p>
							
									<input type="text" placeholder="Firstname" name="fname" >
									
								</div>

								<div class="col-sm-6">	
									<p>Lastname</p>
							
									<input type="text" placeholder="Lastname" name="lname">
								
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-6">	
									<p>Username</p>
							
									<input type="text" placeholder="Username" name="username" >
									
								</div>

								<div class="col-sm-6">	
									<p>Contact</p>
							
									<input type="tel" placeholder="Contact No" name="contact">
								
								</div>
							</div>


							<div class="row form-group">
								<div class="col-sm-6">	
									<p>DOB</p>
							
									<input type="date" name="dob">
									
								</div>

								<div class="col-sm-6">	
									
									<div class="row">

										<p> &nbsp &nbsp Gender</p> 
										<br>

										<div class="col-sm-3">
											Female
										</div>
										<div class="col-sm-3">	
											<input type="radio" value="female" name="gender">
										</div>
										
										<div class="col-sm-3">
											Male
										</div>

										<div class="col-sm-3">	
											<input type="radio" value="male" name="gender">
										</div>
									</div>		
							
						
								</div>
							</div>

							<div class="row form-group">
								<div class="col-sm-12">	
									<p>Email</p>
							
									<input type="email" placeholder="Email" name="email" >
									
								</div>

							</div>

							<div class="row form-group">
								<div class="col-sm-6">	
									<p>Password</p>
							
									<input type="password" placeholder="Password" name="password" >
									
								</div>

								<div class="col-sm-6">	
									<p>Confirm Password</p>
							
									<input type="password" placeholder="Confirm Password" name="cpassword">
								
								</div>
							</div>
							


							<input type="submit" value="Register"></input><br>
				</form>
			
			</div>
		
		</div>
		
		<div class="col-sm-3"></div>
		
		</div>
	
	</body>

</html>