<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title> Multipage-Form </title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/sandstone-bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/custom.css" rel="stylesheet">

		<style>
			#message_form {
				bottom: 0;
				position: fixed;
			}
		</style>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="container">
			<!-- Navbar -->
			<nav class="navbar navbar-default">
				<div class="container-fluid nav-inner">
					<a class="navbar-brand nav-center"> Multipage-Form </a>	
				</div>
			</nav>

			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
				<div class="well">
					<!-- Progress Bar -->
					<div class="progress progress-striped active">
						<div class="progress-bar" id="progress-account" style="width:33.33%"> User Account </div>
					  	<div class="progress-bar progress-bar-info hidden" id="progress-billing" style="width:33.33%"> Billing Address</div>
					  	<div class="progress-bar progress-bar-success hidden" id="progress-emergency" style="width:33.33%"> Emergency Contact </div>
					</div>

					<!-- Form -->
					<form class="form-horizontal" id="register-form">
						<fieldset id="account-info">
							<legend> Account Information </legend>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="firstname"> First Name <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="lastname"> Last Name <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="email"> Email <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="password"> Password <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="password" id="password" placeholder="Enter Password">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="password2"> Confirm Password <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="password2" id="password2" placeholder="Enter Password Again">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-4 col-lg-offset-8 col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8">
									<button type="button" class="btn btn-default btn-block next"> Next </button>
								</div>
							</div>
						</fieldset>	
						<fieldset id="billing-info">
							<legend> Billing Information </legend>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="address"> Street Address <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="address" id="address" placeholder="Enter Street Address">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="address2"> Street Address 2 </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="address2" id="address2" placeholder="Enter Street Address">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="city"> City <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="province"> Province <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="province" id="province" placeholder="Enter Province">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="postal_code"> Postal Code <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Enter Postal Code">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-4 col-lg-offset-2 col-md-4 col-sm-4">
									<button type="button" class="btn btn-default btn-block previous"> Previous </button>
								</div>
								<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
									<button type="button" class="btn btn-default btn-block next"> Next </button>
								</div>
							</div>
						</fieldset>
						<fieldset id="emergency-info">
							<legend> Emergency Contact Information </legend>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="e_firstname"> First Name <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="e_firstname" id="e_firstname" placeholder="Enter First Name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="e_lastname"> Last Name <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="e_lastname" id="e_lastname" placeholder="Enter Last Name">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="e_email"> Email <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="e_email" id="e_email" placeholder="Enter Email">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="e_phone"> Phone Number <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="e_phone" id="e_phone" placeholder="Enter Phone Number">
								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-2 control-label" for="e_relationship"> Relationship <span class="form-required">*</span> </label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="e_relationship" id="e_relationship" placeholder="Enter Relationship">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-4 col-lg-offset-2 col-md-4 col-sm-4">
									<button type="button" class="btn btn-default btn-block previous"> Previous </button>
								</div>
								<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
									<button type="submit" class="btn btn-primary btn-block register"> Register </button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-2.1.4.min.js"></script>

		<!-- Bootstrap JS content -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Jquery Validation -->
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/additional-methods.min.js"></script>

		<!-- Custom JS -->
		<script src="js/form.js"></script>
	</body>
</html>