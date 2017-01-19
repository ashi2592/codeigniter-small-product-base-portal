                  <?php include("/../header.php"); ?>
                  <?php include("/../sidebar.php"); ?>
          <div class="content-page">
              <!-- Start content -->
              <div class="content">
                  <div class="container">
                  <?php echo validation_errors(); ?>
         <?php 
            echo form_open_multipart('Product_controller/add_product');
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
                                              <?php echo $msg; ?>
                                              <?php// print_r($records); ?>
                                                  <div class="card-box">
                                                      <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>

                                                     
                                                           <div class="form-group m-b-20">
                                                          <label>Product name <span class="text-danger">*</span></label>
                                                         <?php echo form_input(array('name'=>'product_name','class'=>'form-control','placeholder'=>
                                                        'e.g : Apple iMac','value'=>set_value('product_name')));  ?>
                                                      </div>

                                                      <div class="form-group m-b-20">
                                                      <label>Product seo url <span class="text-danger">*</span></label>
                                                     <?php echo form_input(array('name'=>'product_seo_url','class'=>'form-control','placeholder'=>
                                                        'e.g : Apple iMac','value'=>set_value('product_seo_url')));  ?>
                                                      </div>

                                                     

                                                      <div class="form-group m-b-20">
                                                          <label>Product Description <span class="text-danger">*</span></label>
                                                           <?php echo form_textarea(array('name'=>'product_description','class'=>'form-control','placeholder'=>'Please enter description','value'=>set_value('product_description')));  ?>
                                                      </div>
                                                      
                                                      <div class="form-group m-b-20">
                                                          <label>Categories <span class="text-danger">*</span></label>

                                                          <?php //form_dropdown('product_category', $options)
                                                            ?>
                                                          <select class="form-control " required name="product_category">
                                                              <option>Select</option>
                                                              <?php 
                                                                                                                        foreach ($category as $cat) {
                                                               echo "<option value='".$cat->category_id."'>".$cat->category_name."</option>"; 
                                                              }

                                                              ?>
                                                              </select>
                                                      </div>

                                                      </div>
                                                       <div class="card-box">
                                                   <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Seo Details</b></h5>
                                                   
                                                    <div class="form-group m-b-20">
                                                          <label>Meta title <span class="text-danger">*</span></label>
                                                   <?php echo form_input(array('name'=>'product_title','class'=>'form-control','placeholder'=>'Please Meta Title','value'=>set_value('product_title')));  ?>
                                                         
                                                         
                                                      </div>



                                                        <div class="form-group m-b-20">
                                                          <label>Meta Keywords <span class="text-danger">*</span></label>
                                                <?php echo form_textarea(array('name'=>'product_meta_keyword','class'=>'form-control','placeholder'=>'Please enter Meta Keywords','value'=>set_value('product_meta_keyword')));  ?>
                                                      </div>
                                                        <div class="form-group m-b-20">
                                                          <label>Meta Description <span class="text-danger">*</span></label>
                                                          <textarea class="form-control"  name="product_meta_desc" rows="5" placeholder="Please enter Meta Description" required></textarea>
                                                      </div>
                                                   </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                           

                                                  <div class="card-box">
                                                      <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Product Image</b></h5>
                                                   
                                                      <img id="previewing" height="200px" width="200px" >
                                                      <br/>
                                                      <div class="row">
                                                      <div class="col-md-12 portlets">
                                                      <div class="m-b-30">
                                                      <input name="product_image" type="file" id="file"  />
                                                      </div>
                                                      </div>
                                                      </div>
                                                        <div class="form-group m-b-20">
                                                          <label>Pack size <span class="text-danger">*</span></label>
                                        <?php echo form_input(array('name'=>'product_price','class'=>'form-control','placeholder'=>'Please Enter Pack size','value'=>set_value('product_price')));  ?>
                                                      </div>
<div class="form-group m-b-20">
                                                          <label>Size Unit<span class="text-danger">*</span></label>
                                         <?php echo form_input(array('name'=>'product_price_unit','class'=>'form-control','placeholder'=>'Please EnterSize Unit','value'=>set_value('product_price_unit')));  ?>
                                                      </div>

                                                      <div class="form-group m-b-20">
<label>Case size (P.c.)<span class="text-danger">*</span></label>
                                      
                                                           <?php echo form_input(array('name'=>'case_size','class'=>'form-control','placeholder'=>'Please Enter case size','value'=>set_value('case_size')));  ?>
                                                      </div>
                                                      <div class="form-group m-b-20">
                                                      <label>sort<span class="text-danger">*</span></label>
                                                      <?php echo  form_input(array('name' => 'sort','class' => 'form-control' ,'value' => set_value('sort'),'placeholder' =>"Sort order")); ?>
                                                      </div>

                                                      <div class="form-group m-b-20">
                                                          <label class="m-b-15">Status <span class="text-danger">*</span></label>
                                                          <br/>
                                                          <div class="radio radio-inline">
                                                           <?php echo form_radio('product_status' ,1,TRUE);  ?>
                                                            
                                                              <label for="inlineRadio1"> Enable </label>
                                                          </div>
                                                          <div class="radio radio-inline">
                                                          <?php echo  form_radio('product_status' ,0,false); ?>
                                                            
                                                              <label for="inlineRadio2"> Disable </label>
                                                          </div>
                                                          
                                                      </div>
                                                      

                                                  </div>
 <?php  echo form_close();  ?>
                                                     <div class="card-box">
                                                   <h5 class="text-muted text-uppercase m-t-0 m-b-30"><b>Features</b></h5>
<?php

// $fieldsname= "*";
// $tablename= "gp_product_details";
// $conditions = "p_id = '".$product_id."'";
//   $product_datails_list = multiple_data_select($fieldsname, $tablename, $conditions); 
// //print_r($subproductlist);
// if(  $product_datails_list != 0)
// {
//   foreach ($product_datails_list as $key => $value) {
   
//     echo ' <form action=""  method="post"><input type="hidden" class="form-control"  name="product_detail_id" value="'.$value['d_id'].'" required><div class="row"><div class="col-sm-4"><div class="form-group m-b-20"><input type="text" class="form-control"  name="product_details" placeholder="Name" required value="'.$value['name'].'"></div></div> <div class="col-sm-4"> <div class="form-group m-b-20"><input type="text" class="form-control"  name="product_value" placeholder="Name" required value="'.$value['value'].'">  </div></div><div class="col-sm-4"><div class="form-group m-b-20"> <button type="submit" name="update_product_details" class="btn w-sm btn-primary waves-effect waves-light">update</button>    <button type="submit" name="delete_product_details" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>  </div ></div>  </div></form>';
// }

// }
// else{
//   echo "No Product Details";
// }
  ?>
 
<button id="add_product_details"  type = "button" class="btn btn-group btn-white">Add Product Details</button>
  <div id="add_details"> </div>

                                                  
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
    product_details='<form action=""  enctype="multipart/form-data" method="post"> <div class="row">  <div class="col-sm-5">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="product_details" placeholder="Name" required>  </div>  </div>  <div class="col-sm-4">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="product_value" placeholder="Value">  </div>  </div>   <div class="col-sm-2">  <div class="form-group m-b-20">  <button type="submit" name="add_product_deatils" class="btn w-sm btn-default waves-effect waves-light">Save</button>    </div>  </div>  </div></form>';

$("#add_product_details").click(function()
  {    
    // $("#add_product_details").hide();
    $("#add_details").append(product_details);
    return false;

  });
}
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