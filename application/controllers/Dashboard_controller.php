<?php
class Dashboard_controller extends CI_Controller {

 function __construct() { 
         parent::__construct(); 
          if( ! $this->session->userdata('user_id') )
          return redirect('admin/login');
         $this->load->model('Product_Model');
         $this->load->model('Admin_model');
      } 
          public function index() { 
          	
          	
			$data['enquiry_number'] = $this->Admin_model->enuiry_count();
			
               	  $data['products_no'] = $this->Product_Model->num_rows();
          	  $data['category_count'] = $this->Product_Model->numberofcategory();
          	   $config = [
          'base_url'      => base_url().'index.php/Dashboard_controller/index/',
          'per_page'      =>  5,
          'total_rows'    =>   $data['products_no'],
          'full_tag_open'   =>  "<ul class='pagination'>",
          'full_tag_close'  =>  "</ul>",
          'first_tag_open'  =>  '<li>',
          'first_tag_close' =>  '</li>',
          'last_tag_open'   =>  '<li>',
          'last_tag_close'  =>  '</li>',
          'next_tag_open'   =>  '<li>',
          'next_tag_close'  =>  '</li>',
          'prev_tag_open'   =>  '<li>',
          'prev_tag_close'  =>  '</li>',
          'num_tag_open'    =>  '<li>',
          'num_tag_close'   =>  '</li>',
          'cur_tag_open'    =>  "<li class='active'><a>",
          'cur_tag_close'   =>  '</a></li>',
        ];
              $data['records'] = $this->Product_Model->product_list($config['per_page'], $this->uri->segment(3) );
          	    
        $this->pagination->initialize($config);
            
         $this->load->view('admin/dashboard',$data); 

        
              } 

      public function updatepassword()
      {
        $data['msg'] ="";
        $existing_password = $this->Admin_model->get_password();
          $existing_password =  $existing_password[0]->password;
          if ($this->form_validation->run('password') == TRUE)
          {
          if($existing_password  == $this->input->post('oldpassword'))
          {
            $password =$this->input->post('newpassword');
            $data = array('password' =>$password );
            $this->Admin_model->update_password($data);
             $data['msg'] ="update successfully";
          }
          else
          {  $data['msg'] ="Old password Do not match";

          }

              
        $this->load->view('admin/module/password',$data);
          }
          else
          {
    $this->load->view('admin/module/password');
          }

       
      }

      public function password()
      {
        $this->load->view('admin/module/password');
        }


        public function contact_details()
        {
          $data['contact_data'] = $this->Admin_model->get_contact_details(); 
          $this->load->view('admin/module/contact', $data);
        }

        public function update_contact_details()
        {

             $data['contact_data'] = $this->Admin_model->get_contact_details(); 
          $this->load->view('admin/module/contact', $data);
          
        }

      public function enquiry()
      {
          $config = [
          'base_url'      => 'admin/leads/',
          'per_page'      =>  10,
          'total_rows'    =>  $this->Admin_model->enuiry_count(),
          'full_tag_open'   =>  "<ul class='pagination'>",
          'full_tag_close'  =>  "</ul>",
          'first_tag_open'  =>  '<li>',
          'first_tag_close' =>  '</li>',
          'last_tag_open'   =>  '<li>',
          'last_tag_close'  =>  '</li>',
          'next_tag_open'   =>  '<li>',
          'next_tag_close'  =>  '</li>',
          'prev_tag_open'   =>  '<li>',
          'prev_tag_close'  =>  '</li>',
          'num_tag_open'    =>  '<li>',
          'num_tag_close'   =>  '</li>',
          'cur_tag_open'    =>  "<li class='active'><a>",
          'cur_tag_close'   =>  '</a></li>',
        ];
        $this->pagination->initialize($config);
        $data['enquiry'] = $this->Admin_model->get_enquiry($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/module/leads',$data);

     }
}
?>