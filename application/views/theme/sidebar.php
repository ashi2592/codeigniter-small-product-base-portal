 <div class="col-md-3">
    <div class="row">
      <p class="product-1">OUR PRODUCTS</p>
      <ul id="accordion" class="accordion">
       <?php 
  
  foreach ($category as $key => $value) {
      echo '  <li class="active"><div class="link"><a href="'.base_url().'category/'.$value->category_seo_name.'"><i class="fa fa-plus"></i>'.$value->category_name.'</a></div>';
      if($value->category_id == $category_id)
      {
get_product_by_categoty_sibebar($category_id);
}
  }


   ?>



      </ul>
    </div>
  </div>