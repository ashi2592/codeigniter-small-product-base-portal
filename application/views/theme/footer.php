
<div class="container-fluid footer">
  <div class="container">
    <div class="col-md-3">
      <h4>About <span>Our company</span></h4>
     
      <p align="center"><img src="<?php echo base_url(); ?>public/images/footer.png" class="img-responsive" /></p>
      <p>According to Ayurveda it is natural to desire beauty & it is natural & normal to be vibrant & beautiful. </p>
    </div>
    <div class="col-md-3">
      <h4>Qur <span>Products</span></h4>
            <ul class="footer-links">
<?php 
echo ' <ul class="footer-links">';
foreach ($category as $cat) {
     echo '  <li><a href="'.$cat->category_seo_name.'">'.$cat->category_name.'</a></li>';

}
echo '  </ul>';
?>
      </ul>
    </div>
    <div class="col-md-3">
      <h4>Information</h4>
      <ul class="footer-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.ph">Privacy Policy</a></li>
        <li><a href="productst#">Terms Of Conditions</a></li>
        <li><a href="quality#">Shipping & Delivery Policy</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
    <div class="col-md-3 ftr-4">
      <h4>Know Us <span>More</span></h4>
      
      <p class="add"><strong>Contact:</strong><br>
        <strong>Iha Vedic Beauty</strong><br />
        +91-9971936817<br>
        <br>
        <strong><strong>Address:</strong> IHA VEDIC ESSENTIALS PVT. LTD. </strong>981, 1st Floor, Modern Industrial Estate, Phase : A,
Bahadurgarh : 124 507, Haryana, India <br>
        <br>
        <strong>Email : </strong><a href="#"> info@ihavedicbeauty.com </a></p>
    </div>
  </div>
</div>
<div class="container-fluid ftr">
  <div class="container ftr-1">
    <div class="col-md-8">© 2016 ihavedicbeauty.com  All Rights Reserved (Terms of Use)</div>
    <div class="col-md-4">Developed and Managed by: Global Ad Media</div>
  </div>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>/public/js/jquery.hashchange.min.js" type="text/javascript"></script> 

<!----> 
<!-- Add fancyBox main JS and CSS files --> 
<script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.fancybox.js"></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.easing.1.3.js'></script> 
<script src="<?php echo base_url(); ?>public/js/magiczoom.js" type="text/javascript"></script>


<script type="text/javascript">

function view_data()
{
 //alert("hello");
      $("#description2").removeClass( "hide-data" ).addClass( "visbale-data" );
      $("#view_more").hide();
}


</script>
<script type="text/javascript">
	
	function updateTransition() {
  var el = document.querySelector("div.box1");
   
  if (el) {
    el.className = "box";
  } 
   
  return el;
}

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();    
    if (scroll < 1) {
       updateTransition();
    }
});


</script>

</body>
</html>
