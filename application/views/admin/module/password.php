<?php include("/../header.php"); ?>
<?php include("/../sidebar.php"); ?>

<div class="content-page">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					 
									<div class="row">
									
									<div class="col-lg-6">
									<div class="card-box">
									<h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Change password</b></h5>
									<?php echo validation_errors(); 
									if(isset($msg))
									{
										echo $msg;
									}
									?>
 							<?php echo form_open('admin/updatepassword'); ?>
 							
										<div class="form-group m-b-20">
										<label>Old password<span class="text-danger">*</span></label>
										
										<?php echo form_input(array('name'=>'oldpassword','class'=>'form-control','placeholder'=>
                                                        'Old password' ,'type'=>'password'));  ?>
										
										</div>
										<div class="form-group m-b-20">
									<label>New password<span class="text-danger">*</span></label>
									<?php echo form_input(array('name'=>'newpassword','class'=>'form-control','placeholder'=>
                                                        'New password' ,'type'=>'password'));  ?>
									
									</div>
									<div class="form-group m-b-20">
									<label>confirm password<span class="text-danger">*</span></label>
									<?php echo form_input(array('name'=>'confirmpassword','class'=>'form-control','placeholder'=>
                                                        'Retype password' ,'type'=>'password'));  ?>
									
									</div>
									<div class="row">
										<div class="col-sm-12">
										<hr />
										<div class="text-center p-20">
										<button type="submit" name="chnagepassword" class="btn w-sm btn-default waves-effect">Update</button>
										</div>
										</div>
										</div>
										
										<?php echo  form_close(); ?>
									</div>
									
									</div>
									</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include("/../footer.php"); ?>