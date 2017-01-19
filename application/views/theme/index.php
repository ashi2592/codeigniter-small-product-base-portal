
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Iha Vedic Beauty</title>
<?php include('header.php');
include('slidershow.php');

 ?>

<div class="container">
<?php 
//print_r($featured_product[0]);

//echo $featured_product[0]['featured_product_name'];

foreach ($featured_product as  $value) {
	// echo $value['featured_product_name'];
?>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">				
				<div class="hover ehover11">
					<img class="img-responsive" src="<?php echo base_url(); ?>featured/<?php echo $value['featured_product_image']; ?>" >
						<div class="overlay">
							<h2><?php echo $value['featured_product_name']; ?></h2>
							<a href="<?php echo base_url(); ?>index.php/product/<?php  echo $value['featured_product_url']; ?>">
							<button class="info nullbutton" data-toggle="modal" data-target="#modal11">View More
							</button>
							</a>
						</div>				
				</div>
            </div>
<?php


}
?>
</div>
<br/>


<div class="container hidden-xs">
        <div class="row">
        <div class="row">
        <div class="row">
            <div class="col-md-12 crt-1">
            <h3>Featured Products</h3>
            <br />
            </div> 
         </div>
            
        </div>
           <div class="col-md-3">
        </div>
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                      <div class="row">
<?php 
//print_r($random_product);
foreach ($random_product as $key => $value) {
?>
<div class="col-sm-2">
        <a href='<?php echo base_url(); ?>index.php/product/<?php  echo $value['product_seo_url']; ?>'> <div class="col-item">
        <div class="photo">
        <img src="<?php echo base_url(); ?>upload/<?php echo $value['product_image']; ?>" class="img-responsive" alt="<?php echo $value['product_name']; ?> image">
        </div>
        <div class="info">
        <div class="row">
        <div class="price col-md-12">
        <h5>
        <?php echo $value['product_name']; ?></h5>
        <h5 class="price-text-color">
        <?php echo $value['product_price']; ?>/<?php echo $value['product_price_unit']; ?>

        </div>

        <div class="clearfix">
        </div>
        </div>
        </div>
        </div>
        </a>
        </div>
<?php
}
     
     ?>   
       </div>
                </div>

 <div class="item">
                      <div class="row">

                      <?php 
//print_r($random_product);
foreach ($random_product as $key => $value) {
?>
                        <div class="col-sm-2">
                           <a href='<?php echo base_url(); ?>index.php/product/<?php  echo $value['product_seo_url']; ?>'>  <div class="col-item">
                                <div class="photo">
                                   <img src="<?php echo base_url(); ?>upload/<?php echo $value['product_image']; ?>"  class="img-responsive" alt="<?php echo $value['product_name']; ?> image">
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-12">
                                            <h5>
                                                <?php echo $value['product_name']; ?></h5>
                                            <h5 class="price-text-color">
                                               <?php echo $value['product_price']; ?>/<?php echo $value['product_price_unit']; ?>
                                        
                                    </div>
                                    
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                        </div>
                        <?php } ?>
               </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


</div>
<?php include('footer.php'); ?>