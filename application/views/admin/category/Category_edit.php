   <?php include("/../header.php"); ?>
                  <?php include("/../sidebar.php"); ?>                  


  <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <!-- Page-Title -->
            <div class="row">
              <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">View Category<span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                                    
                                </div>

                <h4 class="page-title">AddProduct Catgeory</h4>
                <ol class="breadcrumb">
                  <li>
                    <a href="<?php echo base_url()."/product";?>">Home</a>
                  </li>
                                    <li>
                    <a href="<?php echo base_url()."/product/category";?>">Product Catgeory</a>
                  </li>

                  <li class="active">
                   
                  
                  </li>
                </ol>
              </div>
            </div>

                          <div class="row">
                              <div class="col-sm-12">

  <?php echo validation_errors(); ?>
                                   <?php   echo form_open('Product_controller/update_category_data'); ?>
                                          <div class="row">
                                              <div class="col-lg-6">
                                                  <div class="card-box">
                                                      <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>

                                                      <div class="form-group m-b-20">
                                                          <label>Category Name <span class="text-danger">*</span></label>
                                                             <?php echo form_input(array('name'=>'category_name','class'=>'form-control','placeholder'=>
                                                        'e.g : Apple iMac','value'=>$category_data[0]->category_name));  ?>
                                                         <?php echo form_input(array('name'=>'category_id','type'=>'hidden','value'=>$category_data[0]->category_id));  ?>

                                                        <!--   <input type="text" class="form-control" name="category_name" placeholder="e.g : Apple iMac" required> -->
                                                      </div>
                                                      <div class="form-group m-b-20">
                                                          <label>Category Seo url<span class="text-danger">*</span></label>
                                                      <?php echo form_input(array('name'=>'category_seo_name','class'=>'form-control','placeholder'=>
                                                        'e.g : Apple iMac','value'=>$category_data[0]->category_seo_name));  ?>
                                                      </div>

                                                      
                                                      <div class="form-group m-b-20">
                                                          <label>Category Description <span class="text-danger">*</span></label>
                                                            <?php echo form_textarea(array('name'=>'category_description','class'=>'form-control','placeholder'=>'Please enter description','value'=>$category_data[0]->category_descrption));  ?>
                                                        <!--   <textarea class="form-control" rows="5"  name="category_description"    required></textarea> -->
                                                      </div>

                                                      
                                                            <div class="form-group m-b-20">
                                                          <label>Parent Categories <span class="text-danger">*</span></label>
                                                          <select class="form-control " required name="cat_sub_id">
                                                              <option value="">None</option>
                                                               <?php 
                                                              foreach ($categories as $cat) {
                                                                if($category_data[0]->cat_sub_id == $cat->category_id )
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
                                                              <?php
                                                           
                                                              foreach ($category as $cat ) {

                                                              echo '<option value="'.$cat->category_id.'">'.$cat->category_name.'</option>';
                                                               
                                                              }
                                                               ?>
                                                          </select>

                                                      </div>

                                                      

                                                  </div>
                                              </div>


                                              <div class="col-lg-6">
                                                  <div class="card-box">
                                                                 
                                                
                                                      <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>Meta Data</b></h5>

                                                      <div class="form-group m-b-20">
                                                          <label>Meta title</label>
                                                    <!--       <input type="text" name="category_meta_title" class="form-control" placeholder="Enter title" value=""> -->
                                                           <?php echo form_input(array('name'=>'category_meta_title','class'=>'form-control','placeholder'=>'Enter Meta Title','value'=>$category_data[0]->category_meta_title));  ?>
                                                      </div>

                                                      <div class="form-group m-b-20">
                                                          <label>Meta Keywords</label>
                                                         <!--  <input type="text" name="category_meta_keyword" class="form-control" placeholder="Enter keywords" value="" > -->
                                                          <?php echo form_input(array('name'=>'category_meta_keyword','class'=>'form-control','placeholder'=>'Enter Meta Keyword','value'=>$category_data[0]->category_meta_keyword));  ?>
                                                      </div>

                                                      <div class="form-group m-b-20">
                                                          <label>Meta Description </label>
                                                         <!--  <textarea class="form-control"  name="category_meta_description" rows="5" placeholder="Please enter description"></textarea> -->
                                                           <?php echo form_input(array('name'=>'category_meta_description','class'=>'form-control','placeholder'=>'Enter Meta description','value'=>$category_data[0]->category_meta_description));  ?>
                                                      </div>
                                                        <div class="form-group m-b-20">
                                                          <label class="m-b-15">Status <span class="text-danger">*</span></label>
                                                          <br/>
                                                          <div class="radio radio-inline">
                                                              <!-- <input type="radio" value="1" name="category_status" checked=""> -->
                                                                  <?php echo form_radio('category_status' ,$category_data[0]->category_status,TRUE);  ?>
                                                              <label for="inlineRadio1"> Enable </label>
                                                          </div>
                                                          <div class="radio radio-inline">
                                                                <?php echo  form_radio('category_status' ,$category_data[0]->category_status,false); ?>
                                                              <label for="inlineRadio2"> Disable </label>
                                                          </div>
                                                          
                                                      </div>

                                                  </div>

                                                 
                                              </div>


                                          </div>


                                          <div class="row">
                                              <div class="col-sm-12">
                                                  <hr />
                                                  <div class="text-center p-20">
                                                       <button type="button" class="btn w-sm btn-white waves-effect">Cancel</button>
                                                      
                                                                                                
                              <button type="submit"  name="add_category" class="btn w-sm btn-default waves-effect waves-light"    >Save</button>
 
                                               
                                           
                                                  </div>
                                              </div>
                                          </div>
                                      <?php echo form_close();
                                      ?>                                  </div>
                              </div>



                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>

  
 <?php include("/../footer.php"); ?>