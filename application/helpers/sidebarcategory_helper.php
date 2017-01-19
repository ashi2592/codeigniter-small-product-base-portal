<?php 

 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_product_by_categoty_sibebar')){
   function get_product_by_categoty_sibebar($cateory_id){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
     
       $query = $ci->db ->get_where('gp_products', array('cat_id' => $cateory_id));
       $product_data = $query->result();
          if($query->num_rows() > 0){
         echo "<ul class='submenu' style='display:block;'>";
            foreach ($product_data as $p) {                
                echo ' <li><a href="'.base_url().'/product/'.$p->product_seo_url.'">'.$p->product_name.'</a></li>';
            } 
               echo "</ul>";
               }else{
           return false;
       }
   }
}
 ?>


   