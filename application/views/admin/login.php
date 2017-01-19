
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon_1.ico">

        <title>login</title>

            
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>

        
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
          <div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"><strong class="text-custom"></strong> </h3>
                <h3 class="text-center"><strong class="text-custom">Ashish CodeIginter</strong> </h3>
            </div> 


            <div class="panel-body">
            <?php echo validation_errors(); ?>

         <?php 
            echo form_open_multipart('Login_controller/admin_login');
            ?>
            <?php if( $error = $this->session->flashdata('login_failed')); ?>
                 <?= $error ?>
                
                <div class="form-group ">
                    <div class="col-xs-12">
                    <?php echo form_input(array('name'=>'username','class'=>'form-control','placeho lder'=>
                                                        'e.g : Apple iMac','value'=>set_value('username')));  ?>
                      
                    </div>
                </div>
<hr>
                <br/>
                <div class="form-group">
                    <div class="col-xs-12">
                          <?php echo form_input(array('name'=>'password','type'=>'password','class'=>'form-control','placeholder'=>
                                                        'Enter Password'));  ?>
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" name="login" type="submit">Log In</button>
                    </div>
                </div>

                
            <?php 
            echo form_close();
            ?>
            
            </div>   
            </div>                              
               
        </div>
    <?php include('footer.php'); ?>