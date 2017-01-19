<?php 
   class Product_Model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
      public function insert($tablename,$data) { 
         if ($this->db->insert($tablename, $data)) { 
           $last_id = $this->db->insert_id();
              return $last_id; 
         } 
         else{
           return 0; 
         }
      } 
   
      public function delete($pid) { 
         if ($this->db->delete("gp_products", "product_id = ".$pid)) { 
            return true; 
         } 
      } 
   
      public function update($tblname,$data,$product_id,$columname) { 
         $this->db->set($data); 
         $this->db->where($columname, $product_id); 
         $this->db->update($tblname, $data); 
      } 

        
      public function seo_url($name)
      {
        $new_url =  str_replace(" ", "-", $name);
        return  $new_url;
      }

        public function product_list( $limit, $offset)
        {

        $query = $this->db
        ->select('*')
        ->from('gp_products')
        ->limit( $limit, $offset )
         ->get();

        return $query->result();
        }

      public function num_rows()
        {
         
          $query = $this->db->get('gp_products');
                    
          return $query->num_rows();
        }



       public function numberofcategory()
        {
         
          $query = $this->db->get_where('gp_category', array('category_status' => 1));           
          return $query->num_rows();
        }


        public function category_list( $limit, $offset)
        {

        $query = $this->db ->get_where('gp_category', array('category_status' => 1), $limit, $offset);

        return $query->result();
        }

      public function category_select()
       {           
        $query = $this->db->get_where('gp_category', array('category_status' => 1));
        return $query->result();
        }

        public function get_category_by_id($id)
        {           
        $query = $this->db->get_where('gp_category', array('category_id' => $id));
        return $query->result();
        }
        public function delete_category($category_id) { 
          if ($this->db->delete("gp_category", "category_id = ".$category_id)) { 
          return true; 
          } 
        } 


      public function get_featured_products()
      {
 $query = $this->db->get_where('gp_product_feature_products');
        return $query->result();
      }

      public function delete_featured_product($featured_id)
      {
          if ($this->db->delete("gp_product_feature_products", "featured_id = ".$featured_id)) { 
          return true; 
          } 
       
      }

    public function product_spec($product_id)
    {
      $query =$this->db->where('p_id', $product_id)
      ->get('gp_product_details');
       return $query->result();

    }
   public function delete_product_specfication($product_id)
   {
    if ($this->db->delete("gp_product_details", "p_id = ".$product_id)) { 
          return true; 
          } 
   }

}
   
?> 