<?php 
$product_meta_desc = $product_data[0]['product_meta_desc'];
$product_meta_keyword = $product_data[0]['product_meta_keyword'];
$product_title =$product_data[0]['product_title'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $product_title; ?></title>
<meta rel="description" content="<?php echo $product_meta_desc; ?>">
<meta rel="keywords" content="<?php echo $product_meta_keyword; ?>">
<?php include('header.php'); 
 $product_name=$product_data[0]['product_name'];
$product_price =$product_data[0]['product_price'];
$product_description=$product_data[0]['product_description'];
$product_status= $product_data[0]['product_status'];
$product_image =$product_data[0]['product_image'];
$feature_status=$product_data[0]['feature_status'];
$product_price_unit =$product_data[0]['product_price_unit'];
$product_seo_url = $product_data[0]['product_seo_url'];
$case_size = $product_data[0]['case_size'];

?>

<!--about start--> 

<br />
<div class="container">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active"><?php echo $product_name; ?></li>
  </ol>
</div>
<!--about end-->

<div class="container">
  <div class="col-md-6">
    <div class="preview col">
      <div class="app-figure" id="zoom-fig"> <a id="Zoom-1" class="MagicZoom"   href="<?php echo base_url(); ?>upload/<?php echo $product_image; ?>"> <img src="<?php echo base_url(); ?>upload/<?php echo $product_image; ?>" alt=""/> </a>
        <div class="selectors"> <a data-zoom-id="Zoom-1"  href="<?php echo base_url(); ?>upload/<?php echo $product_image; ?>" data-image="<?php echo base_url(); ?>upload/<?php echo $product_image; ?>">  </a>  </div>
    
      </div>

      
    </div>

  </div>
  <div class="col-md-6">
     <h1 class="bor"><?php echo $product_name; ?></h1>
    <h4 class="bor"><?php   echo $cat_data[0]->category_name;?></h4>
    <div class="price"> <strong>Pack Size:</strong>  <?php echo $product_price; ?> / <?php echo $product_price_unit; ?></div>
   <div class="price"> <strong>Case Size:</strong>  <?php echo $case_size; ?> P.c.</div>

   <div class="hide-data" id="description2" >
      <h4> <strong>Product Description:</strong></h4>
   <?php echo $product_description; ?>
   
   </div>

   <button onclick="view_data();" class="btn btn-sm btn-primary" id="view_more">Read More</button> 
  <?php if($product_specification != 0 ) { ?>
       <ul class="features">
      <h4> <strong>Active Ingredients:</strong></h4>
      Each Gram Contains Natural Extracts
      <?php foreach ($product_specification as $key => $value) {
      echo '<li> <strong>'.$value['name'].':</strong>'.$value['value'].'</li>';
      }   ?>
    </ul>
    <?php } ?>
  </div>
   
</div>
<br />


<div class="container">
  <div class="col-md-8">
 
 
  <?php 

echo '  <p class="pa_title">Related Products</p>';
//print_r($related_product);

foreach ($related_product as $key => $value) { 

if(!empty($value['product_image']))
{
$image = base_url()."upload/".$value['product_image']."";
}
else
{
$image = base_url()."public/images/good-2.png";
}
  ?>

<div class="col-md-4 col-lg-4 col-sm-6 wow slideInLeft"">
        <a href='<?php echo base_url(); ?>index.php/Frontend_controller/product/<?php  echo $value['product_seo_url']; ?>'>  <div class="box-1"> <img src="<?php echo $image; ?>" class="img-responsive" alt="">
        <h6 class="hed"><?php echo $value['product_name']; ?></h6>
                   <div class="price-pro-listing"> <strong>Pack Size:</strong>  <?php echo $value['product_price']; ?>/<?php echo $value['product_price_unit']; ?></div>
                    <div class="price-pro-listing"> <strong>Case Size:</strong>  <?php echo $value['case_size']; ?></div>

                   </a>
          <p align="center"><a href='<?php  echo $value['product_seo_url']; ?>.php' class="btn btn-default">View More</a></p>
        </div>

      </div>
        <?php 
        } 

  ?>

   </div>
  <div class="col-md-4 quiry wow slideInRight" >
 <h5 class="tery">Enquiry Now</h5>
		<form role="form" id="contact-form" action="contact_form.php" class="contact-form" method="post">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                       <input type="hidden"  name="product_name" value="<?php echo $product_name; ?>">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Name" required>
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail" required>
                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                            <input type="text" class="form-control" name="phone" autocomplete="off" id="email" placeholder="Phone" required onkeydown="return ( event.ctrlKey || event.altKey  || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106) || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40)  || (event.keyCode==46) )" minlenght="10" maxlength="10">
                      </div>
                    </div>
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" autocomplete="off" name="message" id="Message" placeholder="Message" required></textarea >
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right">Submit</button>
                  </div>
                  </div>
                </form>

 <br>
  </div>
</div>
<br />
<br />
<br />



<?php include('footer.php'); ?>