<?php include("/../header.php"); ?>
<?php include("/../sidebar.php"); ?>

    <div class="content-page">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">

    <?php echo $this->pagination->create_links(); ?>
            <table id="datatable" class="table table-striped table-bordered">
            <thead>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email </th>
            <th>Phone Number </th>
            <th>message </th>
            <th>product Name </th>
            </tr>
              
            </thead>
            <tbody>
        
          <?php 
foreach ($enquiry as $r) {
            echo '<tr><td>'.$r->id.'</td><td>'.$r->name.'</td><td>'.$r->email.'</td>
            <td>'.$r->phone.'</td><td>'.$r->message.' </td><td>'.$r->product_name.'</td></tr>';
          }
         
          

          ?>
              
            </tbody>
            </table>


            </div>
          </div>
        </div>
      </div>
    </div>



<?php include("/../footer.php"); ?>