<!DOCTYPE html>
<html lang="en">
<head>
	<title>Roax Academy</title>

	<?php include("includes/head.inc");?>

</head>
<body id="register">

<?php include("includes/header.inc");?>


	<div class="content row">					
		<section class="reg-form col col-sm-8">
			<h2>Registration form</h2>
			<p>We're not currently taking registrations for the Roux Academy Conference, but if you want to be placed into our mailing list for more information, please complete the form below.</p>

			
			<form class="form-horizontal" action="#" role="form" data-toggle="validator">
				<legend>Personal Info</legend>								
				<div class="form-group">
					<label class="control-label col-sm-3" for="name">Name*</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="name" autofocus placeholder="Last, FIrst" required="true" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="company name">Company Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="company" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="email">Email*</label>
					<div class="col-sm-9">
						<input type="email" class="form-control" id="email" required="true" />
					</div>
				</div>					

				<legend>Other Info</legend>
				
				<div class="form-group">
					<label class="control-label col-sm-3" for="request type">Request Type</label>
					<div class="col-sm-9">
					<div class="radio">
						<label class="radio"><input type="radio" name="request" />Question</label>
						<label class="radio"><input type="radio" name="request" />Comment</label>
					</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="request type">Subscribe</label>
					<div class="col-sm-9">
						<div class="checkbox">
							<label><input type="checkbox" value="yes" checked="checked" >Would you like to subscribe to our e-mail list?</label>
						</div>
					</div>
				</div>


				<div class="form-group">
					<label class="control-label col-sm-3" for="promo">class="control-label col-sm-3" for="request type"</label>
					<div class="col-sm-9">
						<select class="form-control" id="promo">
							<option>Choose...</option>
							<option>A friend</option>
							<option>Facebook</option>
							<option>Twitter</option>
							<option>Other</option>
						</select>
					</div>
				</div>
				<div class="form-group">						
					<div class="col col-sm-2 col-sm-push-3">
						<input type="submit" class="btn btn-primary" />
					</div>
				</div>
			</form>
		</section>						
		
		<section class="sidebar col col-sm-4 hidden-xs">
					
		<?php 
		
		include("includes/sidebar/sidebar-register.inc");
		include("includes/sidebar/sidebar-lastyear.inc");
		include("includes/sidebar/sidebar-schedule.inc");
		
		?>
		
		</section>			
	</div>

<?php include("includes/footer.inc");?>

</body>
</html>