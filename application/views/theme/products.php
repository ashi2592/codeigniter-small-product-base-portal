
<?php 
$category_id=$category_data[0]['category_id'] ;
 $category_name = $category_data[0]['category_name'];
$category_seo_name = $category_data[0]['category_seo_name'];
$category_description =$category_data[0]['category_descrption'];
$category_status = $category_data[0]['category_status'];
$category_meta_title =$category_data[0]['category_name'];
$category_meta_keyword = $category_data[0]['category_meta_keyword'];
$category_meta_description =  $category_data[0]['category_meta_description'];


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $category_meta_title; ?></title>
<meta rel="description" content="<?php echo $category_meta_description; ?>">
<meta rel="keywords" content="<?php echo $category_meta_keyword; ?>">

<?php include('header.php'); ?>
<!--about start-->

<!-- <div class="container-fluid">
  <div class="row"><img src="images/polyber-73.png" class="img-responsive" /></div>
</div> -->
<br />
<div class="container">
  <ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active"><?php echo $category_name; ?></li>
  </ol>
</div>
<!--about end-->

<div class="container Pro-main">
 <?php include('sidebar.php'); ?>
  <div class="col-md-9 product-con">
    <div class="row pro-m">
      <div class="col-md-12">
        <p class="product-2"><strong><?php echo $category_name; ?></strong></p>
      </div>

    <?php 

//print_r($products_list);
foreach ($products_list as $key => $value) {
if(!empty($value['product_image']))
{
$image = base_url()."upload/".$value['product_image']."";
}
else
{
$image = base_url()."public/images/good-2.png";
}

    ?>

   <div class="col-md-4 col-lg-4 col-sm-6">
      <a href='<?php echo base_url(); ?>product/<?php  echo $value['product_seo_url']; ?>'>   <div class="box-1"> <img src="<?php echo $image; ?>" class="img-responsive" alt="<?php echo $value['product_name']; ?> image">
         <h5 class="hed"><?php echo $value['product_name']; ?></h5>
                   <div class="price-pro-listing"> <strong> Pack size:</strong> <?php echo $value['product_price']; ?>/<?php echo $value['product_price_unit']; ?></div>
                    <div class="price-pro-listing"> <strong> Case size:</strong> <?php echo $value['case_size']; ?></div>
                   </a>
          <p align="center"><a href='<?php echo base_url(); ?>product/<?php  echo $value['product_seo_url']; ?>' class="btn btn-default">View More</a></p>
        </div>

      </div>


  <?php  } ?>

    </div>
  </div>
</div>
<div class="container"> </div>
<br />
<br />
<br />
<?php include('footer.php'); ?>