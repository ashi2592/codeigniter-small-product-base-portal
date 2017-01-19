<?php include('header.php'); ?>

<?php include('sidebar.php');

?>

<div class="content-page">
<!-- Start content -->
    <div class="content">
        <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">

            </div>

            <h4 class="page-title">Dashboard</h4>
            <p class="text-muted page-title-alt">Welcome to Ashish !</p>
            </div>
            </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-add-shopping-cart text-primary"></i>
                            <h2 class="m-0 text-dark counter font-600"><?php echo $products_no; ?></h2>
                            <div class="text-muted m-t-5">Total Products</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-account-child text-pink"></i>
                            <h2 class="m-0 text-dark counter font-600"><?php echo $enquiry_number;   ?></h2>
                            <div class="text-muted m-t-5">Total Enquiry</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="md md-store-mall-directory text-info"></i>
                            <h2 class="m-0 text-dark counter font-600"><?php echo $category_count; ?></h2>
                            <div class="text-muted m-t-5">Total Product Category</div>
                        </div>
                    </div>

                </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-box">
                    <a href="products.php" class="pull-right btn btn-default btn-sm waves-effect waves-light">View Product All</a>
                    <h4 class="text-dark header-title m-t-0">Most Enquiry Products</h4>
                    <p class="text-muted m-b-30 font-13">
                    Enquire by Customer
                    </p>

                        <div class="table-responsive">
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
                                            echo "<td><a href = '".base_url()."index.php/product/edit/"
                                            .$r->product_id."'>Edit</a></td>"; 

                                            echo "<td><a href = '".base_url()."index.php/product/delete/"
                                            .$r->product_id."'>Delete</a></td>"; 
                                            echo "<tr>"; 
                                          } 
                            ?>
                            </tbody>
                        </table> 
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div> <!-- container -->

</div> <!-- content -->
</div>

<?php include('footer.php'); ?>