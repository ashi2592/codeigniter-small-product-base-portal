<?php

class Login_model extends CI_Model {
   public function login_valid( $username, $password )
   {
      $q = $this->db->where(['email'=>$username,'password'=>$password])
                  ->get('gp_user');

      if ( $q->num_rows() ) {
         return $q->row()->id;
         // return TRUE;
      } else {
         return FALSE;
      }
   }

}
?>