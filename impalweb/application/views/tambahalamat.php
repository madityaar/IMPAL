<?php
include 'header.php';
?>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="mainbody">
				<h3 class="dark-grey">Billing Information</h3>
				
				<form method="post">
				<?php echo validation_errors(); ?>  
				<?php echo form_open('form'); ?>
					<div class="form-group col-lg-12">
						<label>Alamat</label>
						<input type="" name="alamat" class="form-control" id="" value="" size="16">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Kode Pos</label>
						<input type="" name="kodepos" class="form-control" id="" value="" size="10">
					</div>
									
					<div class="form-group col-lg-12">
						<label>Nomer Telepon</label>
						<input type="" name="nomertelepon" class="form-control" id="" value="" size="40">
					</div>
						
					<div class="form-group col-lg-6">
						<label>Perusahaan</label>
						<input type="" name="perusahaan" class="form-control" id="" value="" size="16">
					</div>					
					<input class="btn btn-primary" type="submit" name="register" value="Register"/>
				</form>			
			
			</div>
		
			
		</div>
	</section>
</div>

<?php include 'footer.php';?>