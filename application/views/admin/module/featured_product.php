   <?php include("/../header.php"); ?>
                  <?php include("/../sidebar.php"); ?>
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
						            <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                                

                <h4 class="page-title"> Featured Product Catgeory</h4>
                <ol class="breadcrumb">
                  <li>
                    <a href="#">Home</a>
                  </li>
                                    <li>
                    <a href="#">Product Catgeory</a>
                  </li>
                  <li class="active">
                   
                 Featured products
                  </li>
                </ol>
              </div>
            </div>
            </div>
<?php
//print_r($featured_product);

  foreach ($featured_product as  $value) {
    $sts = "";
    $unsts ="";
    if($value->feature_active_status == 1){ $sts = "checked"; } 
      if($value->feature_active_status  == 0){ $unsts = "checked"; } 
echo form_open_multipart('admin/feautred/update');
    echo ' 
    <input type="hidden" class="form-control"  name="featured_id" value="'.$value->featured_id.'" required>     <div class="row">  <div class="col-sm-2">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="featured_product_name" placeholder="Subproduct Name" required value="'.$value->featured_product_name.'">  </div>  </div>  <div class="col-sm-2">  <div class="form-group m-b-20">  <img src="'.base_url().'featured/'. $value->featured_product_image.'" height="50" width="50">  <input type="hidden" class="form-control"  name="old_featured_product_image"  required value="'.$value->featured_product_image.'"> <input type="file" name = "featured_product_image"> </div>  </div>  <div class="col-sm-2">  <div class="form-group m-b-20">  <div class="radio radio-inline">  <input type="radio" id="inlineRadio1" value="1" name="feature_active_status"  '.$sts.' >  <label for="inlineRadio1"> Enable </label>  </div>  <div class="radio radio-inline"> <input type="radio" id="inlineRadio2" value="0" name="feature_active_status" '. $unsts.' >  <label for="inlineRadio2"> Disable </label>  </div>  </div>  </div>  <div class="col-sm-3">  <div class="form-group m-b-20"> <button type="submit" name="update_subproduct" class="btn w-sm btn-primary waves-effect waves-light">update</button>    
    <a href="'.base_url().'index.php/admin/feature/delete/'.$value->featured_id.'"> <button  class="btn w-sm btn-danger waves-effect waves-light">Delete</button> </a> </div>  </div><div class="col-sm-2">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="featured_product_url" placeholder="url"  value="'.$value->featured_product_url.'">  </div>  </div>   </div>';
  echo   form_close();
}


  ?>

            <div id="subcategory_add">

</div>
<button id="my_button" class="btn btn-group btn-white">Add Featured Product</button>
            </div>
            </div>


	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	   <script type="text/javascript">
  $(document).ready(function()
{
  
  new_row='<form action="http://localhost/regfre/index.php/feautred/add"  enctype="multipart/form-data" method="post"> <div class="row">  <div class="col-sm-3">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="featured_product_name" placeholder="Featured product Name" required>  </div>  </div>  <div class="col-sm-2">  <div class="form-group m-b-20">  <input type="file" class="form-control"  name="featured_product_image">  </div>  </div>  <div class="col-sm-2">  <div class="form-group m-b-20">  <div class="radio radio-inline">  <input type="radio" id="inlineRadio1" value="1" name="feature_active_status" checked >  <label for="inlineRadio1"> Enable </label>  </div>  <div class="radio radio-inline"> <input type="radio" id="inlineRadio2" value="0" name="feature_active_status" >  <label for="inlineRadio2"> Disable </label>  </div>  </div>  </div> <div class="col-sm-2">  <div class="form-group m-b-20">  <input type="text" class="form-control"  name="featured_product_url" placeholder="Featured product url" >  </div>  </div>   <div class="col-sm-3">  <div class="form-group m-b-20">  <button type="submit" name="add_featured_product" class="btn w-sm btn-default waves-effect waves-light">Save</button>    </div>  </div>  </div></form>';



  $("#my_button").click(function()
  {    
    $("#my_button").hide();
    $("#subcategory_add").append(new_row);
    return false;

  });
});
</script>


<?php include("/../footer.php"); ?>