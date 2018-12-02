<?php
include 'header.php';
?>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="mainbody">
				<h3 class="dark-grey">Registration</h3>
				
				<form method="post">
				<?php echo validation_errors(); ?>  
				<?php echo form_open('form'); ?>
					<div class="form-group col-lg-12">
						<label>Username</label>
						<input type="" name="username" class="form-control" id="" value="" size="16">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Password</label>
						<input type="password" name="password" class="form-control" id="" value="" size="10">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Password Confirmation</label>
						<input type="password" name="passconf" class="form-control" id="" value="" size="10">
					</div>
									
					<div class="form-group col-lg-12">
						<label>Email Address</label>
						<input type="" name="email" class="form-control" id="" value="" size="40">
					</div>
						
					<div class="form-group col-lg-6">
						<label>First Name</label>
						<input type="" name="firstName" class="form-control" id="" value="" size="16">
					</div>			
					<div class="form-group col-lg-6">
						<label>Last Name</label>
						<input type="" name="lastName" class="form-control" id="" value="" size="16">
					</div>	
					<div class="form-group col-lg-12">
						<label>Telepon</label>
						<input type="" name="telepon" class="form-control" id="" value="" size="12">
					</div>					
					<input class="btn btn-primary" type="submit" name="register" value="Register"/>
				</form>			
			
			</div>
		
			
		</div>
	</section>
</div>

<?php include 'footer.php';?>