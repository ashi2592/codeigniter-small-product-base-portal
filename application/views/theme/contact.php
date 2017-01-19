
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Iha Vedic Beauty</title>
<style type="text/css">
	input[type="text"] {
    width: 100%;
    height: 40px;
    margin: 0 6px 10px 0;
    padding: 10px;
    text-transform: none;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    line-height: 20px;
    font-size: 11px;
    color: #666;
    font-style: normal;
    border-radius: 0;
    background: #fff;
    border: 2px solid #e9e9e9;
    box-shadow: none;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
}
textarea {
    min-height: 189px;
	width: 100%;
	 border: 2px solid #e9e9e9;
	 margin-bottom:10px;
}

</style>
<?php include('header.php'); ?>


<!--slider start-->
<div class="container-fluid">
<div class="row">
<img src="<?php echo  base_url(); ?>/public/images/about.jpg" class="img-responsive" />
</div>
</div>
<br />
<!--slider end--> 
<div class="container">
<div class="col-md-6 abut">
<h3 class="ab-head1">Contact Us</h3>
 <p class="add">
        <h4><strong>Iha Vedic Beauty</strong></h4>
      
        <strong><strong>Address:</strong> IHA VEDIC ESSENTIALS PVT. LTD. </strong>981, 1st Floor, Modern Industrial Estate, Phase : A,
Bahadurgarh : 124 507, Haryana, India <br>
      
        <strong>Email : </strong><a href="#"> info@ihavedicbeauty.com </a></p>
        <p>   <strong>Phone:</strong> <a href="#">+91- 9971936817</a></p>
        
        
       <br />
       <p>LikeUs Facebook</p>

</div>


<div class="col-lg-6 col-md-6 col-sm-6 padbot30">
						<!-- CONTACT FORM -->
						<div class="contact_form">
							<h3><b>Contacts form</b></h3>
							<p>Contact for any Query</p>
							<div id="note"></div>
							<div id="fields">
								<form id="ajax-contact-form"  method ="post" action="<?php echo  base_url(); ?>Frontend_controller/send_enquiry">
									<label>Name</label>
									<input name="name" value="" placeholder="Name" type="text">
									<label>E-mail</label>
									<input name="email" value="" placeholder="E-mail" type="text">
									<label>Phone</label>
									<input name="phone" value="" placeholder="Phone" type="text">
									<label>Message</label>
									<textarea name="message" placeholder="Message"></textarea><br>
									<input class="btn active" value="Send Message" type="submit">
								</form>
							</div>
						</div><!-- //CONTACT FORM -->
					</div>

</div>





    
</div>


<br />

<?php include('footer.php'); ?>