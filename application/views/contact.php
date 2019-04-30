<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<!--link an bootstrab online-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<!-- responsive website -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<!-- ############ navbar start #################-->

	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
		<div class="container">
			<!--############# website name ##############-->
			<a href="" class="navbar-brand font-weight-bold">Student Portal</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="collapsenavbar">
				<ul class="navbar-nav ml-auto">
					
					<li class="nav-item"><a href="<?php  echo site_url('welcome/'); ?>" class="nav-link text-white">Sign Up</a></li>
				</ul>

			</div>
		</div>
	</nav>	

	<!--#################### navbar stop ################-->

	<br><br><br><br>
	<div class="responsive">
		<div class="bgimg">


			<div class="form-container">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-sm-5">
						<form name="contact" method="POST" action="<?php echo site_url('welcome/con');  ?>" >
							<div class="form-group">
								<!--label class="control-label" for="contact">Contact</label>-->
								<h3 class="form-group">Contact Us</h3>


							</div>
							<div class="form-group">
								<label for="name" class="control-label">Enter Name</label>
								<input type="text" name="name" class="form-control" placeholder="Enter Your Name" autocomplete="off">
								<span class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="email" class="control-label">Enter Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter Your Email" autocomplete="off">
								<span class="text-danger"></span>
							</div>
							<div class="form-group">
								<label for="message" class="control-label">Enter Message</label>
								<textarea cols="4" rows="5" class="form-control" name="message" placeholder="Enter Message..."></textarea>	
								<span class="text-danger"></span>
							</div>
							<div class="form-group">
								<button class="btn btn-primary float-right" type="Submit" name="contact" >Submit</button>

							</div>
						</form>	
					</div>
					<div class="col-lg-3"></div>
				</div>	
			</div>
		</div>		
		
	</div>
</body>
</html>