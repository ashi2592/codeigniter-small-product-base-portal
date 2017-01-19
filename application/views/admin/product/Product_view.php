           <?php include("/../header.php"); ?>
                  <?php include("/../sidebar.php"); ?>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="btn-group pull-right m-t-15">
                                    <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Product <span class="m-l-5"><i class="md-add-shopping-cart "></i></span></button>
                                    <ul class="dropdown-menu drop-menu-right" role="menu">
                                        <li><a href="add_product.php">Add Product</a></li>
                                        
                                    </ul>
                                </div>
                                 <h4 class="page-title">Products</h4>
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#"> Products </a></li>
                                    
                                </ol>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                   

                                    <div class="table-responsive">
  
      <a href = "<?php echo base_url(); ?>index.php/product/add_view">Add</a>
     
		<?php echo $this->pagination->create_links(); ?>
         <table class="table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th>Product Id</th>
                                                   <th>Product image</th>
                                                    <th>Product Name</th>
                                                     <th>Price</th>
                                                     <th>Status</th>
                                                     <th style="min-width: 80px;">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
         <?php 
            $i = 1; 
         //  print_r($records);
				
            foreach($records as $r) { 
              if($r->product_status == 1){

                  $stat = "Enable";
                  $alert ="success";
                  }
                  else
                  {
                  $stat = "Disable";
                  $alert ="danger";
                  }

               echo "<tr>"; 
               echo "<td>".$r->product_id."</td>"; 
               echo "<td>".$r->product_name."</td>"; 
               echo "<td>".$r->product_name."</td>"; 
              echo "<td><img src='".base_url()."upload/".$r->product_image."' width='50' height='50'></td>";
              echo '<td><spn class="label label-'.$alert.'">'.$stat.'</span></td>';
              echo "<td><a href = '".base_url()."index.php/admin/product/edit/"
                  .$r->product_id."'>Edit</a></td>"; 

               echo "<td><a href = '".base_url()."index.php/admin/product/delete/"
                  .$r->product_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
  </div>
                                </div>
                                
                            </div> <!-- end col -->

                            
                        </div>

                        
                        
                        

                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>

<?php include("/../footer.php"); ?>