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
        <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Category <span class="m-l-5"><i class="fa fa-shop"></i></span></button>
        <ul class="dropdown-menu drop-menu-right" role="menu">
            <li><a href="add_product_category.php">Add Category</a></li>
        </ul>
    </div>

    <h4 class="page-title">Product Catgeory</h4>
    <ol class="breadcrumb">
      <li>
                    <a href="index.php">Home</a>
                  </li>
                                    <li>
                    <a href="product_category.php">Product Catgeory</a>
                  </li>
        
    </ol>
</div>
</div>

<div class="row">
<div class="col-lg-12">
  <div class="card-box">

    <div class="table-responsive">
            <table class="table table-actions-bar">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Catgeory Name</th>
                        <th>Category Seo Url</th>
                         <th>Status</th>
                       
                        <th style="min-width: 80px;">Action</th>
                    </tr>
                </thead>

                <tbody>
  
      <a href = "<?php echo base_url(); ?>index.php/product/add_category">Add</a>
    
      <?php echo $this->pagination->create_links(); ?>

         <?php 
            $i = 1; 
          //print_r($records);
        
            foreach($records as $r) { 
              if($r->category_status == 1){

                  $stat = "Enable";
                  $alert ="success";
                  }
                  else
                  {
                  $stat = "Disable";
                  $alert ="danger";
                  }

               echo "<tr>"; 
               echo "<td>".$r->category_id."</td>"; 
               echo "<td>".$r->category_name."</td>"; 
               echo "<td>".$r->category_seo_name."</td>"; 
                         echo '<td><spn class="label label-'.$alert.'">'.$stat.'</span></td>';
              echo "<td><a href = '".base_url()."index.php/admin/product/category_edit/"
                  .$r->category_id."'>Edit</a></td>"; 

               echo "<td><a href = '".base_url()."index.php/admin/product/category_delete/"
                  .$r->category_id."'>Delete</a></td>"; 
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