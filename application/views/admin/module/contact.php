(<?php include("/../header.php"); ?>
<?php include("/../sidebar.php"); ?>


<div class="content-page">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					 
									<div class="row">
									<div class="col-lg-6">
									<div class="card-box">
									<?php // print_r($contact_data);
									$phone = $contact_data[0]->phone;
									$phone2 = $contact_data[0]->phone2;
									$address = $contact_data[0]->address;
									$email = $contact_data[0]->email; 

									 ?>
									<h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Contact number</b></h5>
									 <form method="post" action="">
									<div class="form-group m-b-20">
									<label>Phone number 1 <span class="text-danger">*</span></label>
									<input type="text" name="phone_number" class="form-control" placeholder="E.g :999999999" required="" value="<?php echo $phone; ?>"  >
									</div>
									<div class="form-group m-b-20">
									<label>Phone number 2 <span class="text-danger">*</span></label>
									<input type="text" name="second_phone_number" class="form-control" placeholder="E.g : 999999999"   value="<?php echo $phone2; ?>" >
									</div>
										<div class="row">
										<div class="col-sm-12">
										<hr />
										
										</div>
										</div>
									
									</div>
									
									</div>


									<div class="col-lg-6">
									<div class="card-box">
									<h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Contact Address</b></h5>
 							
										<div class="form-group m-b-20">
										<label>Address<span class="text-danger">*</span></label>
										<textarea class="form-control"  name="address" rows="5" placeholder="Please enter Address" required><?php echo $address; ?></textarea>
										</div>
										<div class="form-group m-b-20">
									<label>Email Id <span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control" placeholder="e.g :mail@yourmailid.com" required=""  value="<?php echo $email; ?>" >
									</div>
									<div class="row">
										<div class="col-sm-12">
										<hr />
										<div class="text-center p-20">
										<button type="submit" name="email_update" class="btn w-sm btn-default waves-effect">Update</button>
										</div>
										</div>
										</div>
										
										</form>
									</div>
									
									</div>
									</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include("/../footer.php"); ?>