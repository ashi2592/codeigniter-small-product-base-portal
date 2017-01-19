<?php 
   class Admin_model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
      } 
   
     public function enuiry_count()
        {
          $query = $this->db->get('gp_enquiry');
             
          return $query->num_rows();
        }

     public function get_password()
     {
        $query = $this->db->get('gp_user');
        return $query->result();
     }

     public function update_password($data)
     {
          $this->db->set($data); 
         $this->db->where("id", 1); 
         $this->db->update("gp_user", $data); 
      
     }
      public function get_contact_details()
      {
        $query =  $this->db->get('gp_contact');
        return $query->result();
      }

      public function get_enquiry($limit, $offset )
      {
        $query = $this->db
        ->select('*')
        ->from('gp_enquiry')
        ->limit( $limit, $offset )
         ->get();
         
        return $query->result();
      }

    }
?> 