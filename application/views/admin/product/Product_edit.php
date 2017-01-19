             <?php include("/../header.php"); ?>
                  <?php include("/../sidebar.php"); ?>           
          <div class="content-page">
              <!-- Start content -->
              <div class="content">
                  <div class="container">
         <?php 
            echo form_open_multipart('Product_controller/update_product');
            ?>
            <div class="row">
                  <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">

                                     <div class="text-center p-20">

                                     <button type="submit" name="add_product"  class="btn w-sm btn-default waves-effect waves-light">Save</button>
                                     </div>
                                     </div>
                                     </div>
                                     </div>
                                       <div class="row">
                                              <div class="col-lg-6">
                                                <?php // print_r($records); ?>
                                                  <div class="card-box">
                                                      <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>

                                                     
                                                           <div class="form-group m-b-20">
                                                          <label>Product name <span class="text-danger">*</span></label>
                                                          
                                            <input type="hidden" id="product_id" name="product_id" class="form-control" value="<?php echo  $records[0]->product_id ; ?>">
                                                          <input type="text" name="product_name" class="form-control" placeholder="e.g : Apple iMac" required=""  value="<?php echo  $records[0]->product_name ; ?>">
                                                      </div>

                                                      <div class="form-group m-b-20">
                                                      <label>Product seo url <span class="text-danger">*</span></label>
                                                      <input type="text" name="product_seo_url" class="form-control" placeholder="e.g :apple-mac" required="" value="<?php echo  $records[0]->product_seo_url ; ?>" >
                                                      </div>

                                                     

                                                      <div class="form-group m-b-20">
                                                          <label>Product Description <span class="text-danger">*</span></label>
                                                          <textarea class="form-control"  name="product_description" rows="5" placeholder="Please enter description" required><?php echo  $records[0]->product_description ; ?></textarea>
                                                      </div>
                                                      
                                                      <div class="form-group m-b-20">
                                                          <label>Categories <span class="text-danger">*</span></label>
                                                          <select class="form-control " required name="product_category">
                                                              <option>Select</option>
                                                              <?php 
                                                              foreach ($category as $cat) {
                                                                if($records[0]->cat_id == $cat->category_id )
                                                                {
                                                                 $sts = "selected";
                                                                }
                                                                else
                                                                {
                                                                  $sts = "";
                                                                }
                                                               echo "<option value='".$cat->category_id."' ".$sts.">".$cat->category_name."</option>"; 
                                                              }
                                                              ?>
                                                              </select>
                                                      </div>

                                                      </div>
                                                       <div class="card-box">
                                                   <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Seo Details</b></h5>
                                                   
                                                    <div class="form-group m-b-20">
                                                          <label>Meta title <span class="text-danger">*</span></label>

                                                          <input type="text" class="form-control"  name="product_title" value="<?php echo  $records[0]->product_title ; ?>">
                                                         
                                                      </div>
                                                        <div class="form-group m-b-20">
                                                          <label>Meta Keywords <span class="text-danger">*</span></label>
                                                          <textarea class="form-control"  name="product_meta_keyword" rows="5" placeholder="Please enter description" required><?php echo  $records[0]->product_meta_keyword ; ?></textarea>
                                                      </div>
                                                        <div class="form-group m-b-20">
                                                          <label>Meta Description <span class="text-danger">*</span></label>
                                                          <textarea class="form-control"  name="product_meta_desc" rows="5" placeholder="Please enter Meta Description" required><?php echo  $records[0]->product_meta_desc ; ?></textarea>
                                                      </div>
                                                   </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                           

                                                  <div class="card-box">
                                                      <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Product Image</b></h5>
                                                   
                                                        <img id="previewing" height="200px" width="200px" src="<?php echo  base_url(); ?>upload/<?php echo  $records[0]->product_image ; ?>" >

                                                        <input type="hidden" name="old_product_image" value="<?php echo  $records[0]->product_image ; ?>">
                                                        <br/>
                                                        <div class="row">
                                                        <div class="col-md-12 portlets">
                                                        <div class="m-b-30">
                                                        <input name="product_new_image" type="file" id="file"   />
                                                        </div>
                                                        </div>
                                                         </div>

                                                      
                                                     
                                                        <div class="form-group m-b-20">
                                                          <label>Pack size <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="product_price" value="<?php echo  $records[0]->product_price ; ?>">
                                                      </div>
<div class="form-group m-b-20">
                                                          <label>Size Unit<span class="text-danger">*</span></label>
                                                          <input type="text" class="form-control" name="product_price_unit" value="<?php echo  $records[0]->product_price_unit ; ?>">
                                                      </div>

                                                      <div class="form-group m-b-20">
<label>Case size (P.c.)<span class="text-danger">*</span></label>
                                                          <input type="text" class="form-control" name="case_size" value="<?php echo  $records[0]->case_size ; ?>">
                                                      </div>
<div class="form-group m-b-20">
<label>sort<span class="text-danger">*</span></label>
                                                          <input type="text" class="form-control"  name="sort"   value="<?php echo  $records[0]->sort ; ?>">
                                                      </div>

                                                      <div class="form-group m-b-20">
                                                          <label class="m-b-15">Status <span class="text-danger">*</span></label>
                                                          <br/>
                                                          <div class="radio radio-inline">
                                                              <input type="radio" id="inlineRadio1" value="1" name="product_status" <?php if($records[0]->product_status  == "1") { echo "checked" ; } ?> >
                                                              <label for="inlineRadio1"> Enable </label>
                                                          </div>
                                                          <div class="radio radio-inline">
                                                              <input type="radio" id="inlineRadio2" value="0" name="product_status" <?php if($records[0]->product_status  == "0") { echo "checked" ; } ?> >
                                                              <label for="inlineRadio2"> Disable </label>
                                                          </div>
                                                          
                                                      </div>
                                                      

                                                  </div>
 <?php  echo form_close();  ?>

  <div class="card-box">
  <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Active Ingredients</b></h5>
  <?php  //var_dump($product_spec);
  if(!empty($product_spec)){
  foreach ($product_spec as $k) {
    echo '<form action="'.base_url().'index.php/Product_controller/update_product_feture"  enctype="multipart/form-data" method="post"> <div class="row">  <div class="col-sm-5">  <div class="form-group m-b-20">  <input type="hidden" class="form-control"  name="product_id" placeholder="Name" value="'.$k->p_id.'" required><input type="text" class="form-control"  name="product_details" placeholder="Name" value="'.$k->name.'" required>   </div>  </div>  <div class="col-sm-4">  <div class="form-group m-b-20">  <input type="text" class="form-control" value="'.$k->value.'"  name="product_value" placeholder="Value">  </div>  </div>   <div class="col-sm-2">  <div class="form-group m-b-20">  <button type="submit" name="add_product_deatils" class="btn w-sm btn-default waves-effect waves-light">Save</button><a href="'.base_url().'index.php/Product_controller/delete_product_feture/'.$k->p_id.'">  <button type="button" name="add_product_deatils" class="btn w-sm btn-danger waves-light">Delete</button></a>   </div>  </div>  </div></form>';
  }
}
   ?>
   <div id="add_details"> </div>
   <button id="add_product_details"  type = "button" class="btn btn-group btn-white">Add Product Details</button>
                                                   </div>
                                             
                                              </div>

                                                      </div>

           
 </div>
 </div>
 </div>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
   <script type="text/javascript">
  $(document).ready(function()
    {
  var product_id = $("#product_id").val();
    product_details='<form action="<?php echo base_url(); ?>index.php/Product_controller/add_product_feture"  enctype="multipart/form-data" method="post"> <div class="row">  <div class="col-sm-5">  <div class="form-group m-b-20">  <input type="hidden" class="form-control"  name="product_id" placeholder="Name" value="'+product_id+'" required><input type="text" class="form-control"  name="product_details" placeholder="Name"  required>   </div>  </div>  <div class="col-sm-4">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="product_value" placeholder="Value">  </div>  </div>   <div class="col-sm-2">  <div class="form-group m-b-20">  <button type="submit" name="add_product_deatils" class="btn w-sm btn-default waves-effect waves-light">Save</button>    </div>  </div>  </div></form>';

$("#add_product_details").click(function()
  {    
    // $("#add_product_details").hide();
    $("#add_details").append(product_details);
    return false;
  });
});
</script>
 <script type="text/javascript">
    $(function() {
$("#file").change(function() {
   // alert("image change");
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});

function imageIsLoaded(e) {
$("#file").css("color","red");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '250px');
};
 </script>
  <?php include("/../footer.php"); ?>