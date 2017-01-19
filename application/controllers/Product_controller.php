<?php 
   class Product_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
           if( ! $this->session->userdata('user_id') )
      return redirect('login');
                 $this->load->model('Product_Model');
                  //   $data['category'] =  $this->Product_Model->category_select();

         } 
  
      public function index() { 
                     
     $config = [
          'base_url'      => 'http://localhost/regfre/index.php/Product_controller/index/',
          'per_page'      =>  5,
          'total_rows'    =>  $this->Product_Model->num_rows(),
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
        $data['limit']= $config['per_page'];
        $data['offset'] = $this->uri->segment(3);
        $data['records'] = $this->Product_Model->product_list($config['per_page'], $this->uri->segment(3) );
        $this->load->view('admin/product/Product_view',$data); 
              } 
  
       public function add_product_view() { 
           
          $data['category'] =  $this->Product_Model->category_select();
            $data['msg'] = "";
           $this->load->view('admin/product/Product_add',$data); 
      } 

      public function add_product() { 

              $this->form_validation->set_rules('product_name', 'Product Name', 'required');
             if ($this->form_validation->run() == TRUE)
                         {
                       $config['upload_path']          =  './upload/';
                      $config['allowed_types']        = 'gif|jpg|png|jpeg';
                      $config['max_size']             = 100;
                      $config['max_width']            = 1024;
                      $config['max_height']           = 768;

                      $this->load->library('upload', $config);

                      if ( !$this->upload->do_upload('product_image'))
                      {
                      $result = array('error' => $this->upload->display_errors());
                      $image ="";
                      }
                      else
                      {
                      $result = array('upload_data' => $this->upload->data());
                      $image = $result['upload_data']['file_name'];
                      }
                      $tablename = "gp_products";
                      $data = array( 
                      'product_name' => $this->input->post('product_name'), 
                      'product_seo_url' =>$this->Product_Model->seo_url($this->input->post('product_seo_url')),
                      'product_description' =>$this->input->post('product_description'),
                      'cat_id' =>$this->input->post('product_category'),
                      'product_title' =>$this->input->post('product_title'),
                      'product_meta_keyword' =>$this->input->post('product_meta_keyword'),
                      'product_meta_desc' =>$this->input->post('product_meta_desc'),
                      'product_price' =>$this->input->post('product_price'),
                      'product_price_unit' =>$this->input->post('product_price_unit'),
                      'case_size' =>$this->input->post('case_size'),
                      'sort' =>$this->input->post('sort'),
                      'product_status' =>$this->input->post('product_status'),
                      'product_image' => $image
                      ); 

                    $product_id= $this->Product_Model->insert($tablename,$data); 
                    redirect('admin/product/edit/'.$product_id.'','refresh');
                  }
                  else
                  {
                    $data['category'] =  $this->Product_Model->category_select();
                     $data['msg'] = "Not Update Proper";
                     $this->load->view('admin/product/Product_add',$data);
                  }
      
      } 
  
      public function update_product_view() {
           
         $product_id = $this->uri->segment('4'); 
         $query = $this->db->get_where("gp_products",array("product_id"=>$product_id));
         $data['records'] = $query->result(); 
         $data['category'] =  $this->Product_Model->category_select();
         $data['product_id'] = $product_id; 
        $data['product_spec'] = $this->Product_Model->product_spec($product_id);
         $this->load->view('admin/product/Product_edit',$data); 

      } 
  
      public function update_product(){ 
         
                $config['upload_path']          =  './upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('product_new_image'))
                {
                  $result = array('error' => $this->upload->display_errors());
                  $image =$this->input->post('old_product_image');
                }
                else
                {
                  $result = array('upload_data' => $this->upload->data());
                  $image = $result['upload_data']['file_name'];
                }
               $tablename = "gp_products";
			
                $data = array( 
                'product_name' => $this->input->post('product_name'), 
                'product_seo_url' =>$this->Product_Model->seo_url($this->input->post('product_seo_url')),
                'product_description' =>$this->input->post('product_description'),
                'cat_id' =>$this->input->post('product_category'),
                'product_title' =>$this->input->post('product_title'),
                'product_meta_keyword' =>$this->input->post('product_meta_keyword'),
                'product_meta_desc' =>$this->input->post('product_meta_desc'),
                'product_price' =>$this->input->post('product_price'),
                'product_price_unit' =>$this->input->post('product_price_unit'),
                'case_size' =>$this->input->post('case_size'),
                'sort' =>$this->input->post('sort'),
                'product_status' =>$this->input->post('product_status'),
                'product_image' => $image
                ); 

                $product_id = $this->input->post('product_id'); 
                $this->Product_Model->update($tablename,$data,$product_id,"product_id"); 
            redirect('admin/product/edit/'.$product_id.'','refresh') ;

         } 

         public function add_product_feture()
         {
          $product_id = $this->input->post('product_id'); 
          $product_details = $this->input->post('product_details'); 
          $product_value = $this->input->post('product_value'); 
          $tablename = "gp_product_details";
          $data = array('name' => $product_details, 'value' => $product_value,'p_id' => $product_id);
          $this->Product_Model->insert($tablename,$data);
           redirect('admin/product/edit/'.$product_id.'','refresh') ;
         }
         public function update_product_feture()
         {
          $product_id = $this->input->post('product_id'); 
          $product_details = $this->input->post('product_details'); 
          $product_value = $this->input->post('product_value'); 
          $tablename = "gp_product_details";
          $data = array('name' => $product_details, 'value' => $product_value);
          $this->Product_Model->update($tablename,$data,$product_id,"p_id");
         redirect('admin/product/edit/'.$product_id.'','refresh') ;
         }
                  public function delete_product_feture()
         {
          $product_id = $this->uri->segment(3);
          $this->Product_Model->delete_product_specfication($product_id);
         redirect('admin/product/edit/'.$product_id.'','refresh') ;
         }


        public function delete_product() { 
          
         $product_id = $this->uri->segment('4'); 
         $this->Product_Model->delete($product_id); 
          $query = $this->db->get("gp_products"); 
         $data['records'] = $query->result(); 
         $this->load->view('admin/product/Product_view',$data); 
      } 


      public function category_view()
      {

          $config = [
          'base_url'      => 'http://localhost/regfre/index.php/Product_controller/category_view/',
          'per_page'      =>  5,
          'total_rows'    =>  $this->Product_Model->numberofcategory(),
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
          $data['records'] = $this->Product_Model->category_list($config['per_page'], $this->uri->segment(3) );
      $this->load->view('admin/category/Category_view',$data);
      }
      public function add_category()
      {
        $data['category'] = $this->Product_Model->category_select();
       $this->load->view('admin/category/Category_add',$data);
      }

     public function add_category_data()
     {
      $data['category'] = $this->Product_Model->category_select();
      $data = array( 
               'category_name' => $this->input->post('category_name'), 
               'category_seo_name' =>$this->Product_Model->seo_url($this->input->post('category_seo_name')),
               'category_descrption' =>$this->input->post('category_description'),
               'cat_sub_id' =>$this->input->post('cat_sub_id'),
               'category_meta_title' =>$this->input->post('category_meta_title'),
               'category_meta_keyword' =>$this->input->post('category_meta_keyword'),
                'category_meta_description' =>$this->input->post('category_meta_description'),
                 'category_status' =>$this->input->post('category_status')
               );
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');
         $this->form_validation->set_rules('category_name', 'Seo Url ', 'required|is_unique[gp_category.category_seo_name]');
         if ($this->form_validation->run() == TRUE)
         {
     
           $category_id= $this->Product_Model->insert('gp_category',$data);
           $data['category_data'] =$this->Product_Model->get_category_by_id($category_id);
             $this->load->view('admin/category/Category_edit',$data);
         }
         else
         {
           $this->load->view('admin/category/Category_add',$data);
         }

     }


     public function update_category_data()
     {
      
        $cate_id= $this->input->post('category_id');
      $data = array( 
               'category_name' => $this->input->post('category_name'), 
               'category_seo_name' =>$this->Product_Model->seo_url($this->input->post('category_seo_name')),
               'category_descrption' =>$this->input->post('category_description'),
               'cat_sub_id' =>$this->input->post('cat_sub_id'),
               'category_meta_title' =>$this->input->post('category_meta_title'),
               'category_meta_keyword' =>$this->input->post('category_meta_keyword'),
                'category_meta_description' =>$this->input->post('category_meta_description'),
                 'category_status' =>$this->input->post('category_status')
               );
            $this->form_validation->set_rules('category_name', 'Category Name', 'required');
         $this->form_validation->set_rules('category_name', 'Seo Url ', 'required|is_unique[gp_category.category_seo_name]');
         if ($this->form_validation->run() == TRUE)
         {
            $this->Product_Model->update('gp_category',$data,$cate_id,"category_id");
         }
         $data['categories'] = $this->Product_Model->category_select();
         $data['category_data'] =$this->Product_Model->get_category_by_id($cate_id);
             $this->load->view('admin/category/Category_edit',$data);

     }



      public function edit_category()
      {
        $data['category'] = $this->Product_Model->category_select();
          $data['category_data'] =$this->Product_Model->get_category_by_id($this->uri->segment(4));
             $this->load->view('admin/category/Category_edit',$data);
        }

public function delete_category() { 
          
         $category_id = $this->uri->segment('4'); 
         $this->Product_Model->delete_category($category_id); 
        $config = [
          'base_url'      => 'http://localhost/regfre/index.php/Product_controller/category_view/',
          'per_page'      =>  5,
          'total_rows'    =>  $this->Product_Model->numberofcategory(),
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
          $data['records'] = $this->Product_Model->category_list($config['per_page'], $this->uri->segment(3) );
      $this->load->view('admin/category/Category_view',$data);
         
      } 

        public function feature_product()
          {
          $data['featured_product'] =$this->Product_Model->get_featured_products();
          $this->load->view('admin/module/featured_product',$data);
          }

        public function update_featured_product()
        {
            $config['upload_path']          =  './featured/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('featured_product_image'))
            {
            $result = array('error' => $this->upload->display_errors());
            $image =$this->input->post('old_featured_product_image');
            }
            else
            {
            $result = array('upload_data' => $this->upload->data());
            $image = $result['upload_data']['file_name'];
            }
            $featured_id= $this->input->post('featured_id');
            $data = array('featured_product_name' =>$this->input->post('featured_product_name'),
            'featured_product_image' =>$image,
            'featured_product_url' =>$this->input->post('featured_product_url'),
            'feature_active_status' =>$this->input->post('feature_active_status') );
            $this->Product_Model->update('gp_product_feature_products',$data,$featured_id,"featured_id");
            $data['featured_product'] =$this->Product_Model->get_featured_products();
            $this->load->view('admin/module/featured_product',$data);

        }  
    public function delete_feature_product()
    {
      $featured_id= $this->uri->segment(3);
      $this->Product_Model->delete_featured_product($featured_id);
       $data['featured_product'] =$this->Product_Model->get_featured_products();
       $this->load->view('admin/module/featured_product',$data);

    }
 public function add_feature_product()
 {
    $config['upload_path']          =  './featured/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

         if ( !$this->upload->do_upload('featured_product_image'))
         {
         $result = array('error' => $this->upload->display_errors());
         $image ="";
                  }
        else {
         $result = array('upload_data' => $this->upload->data());
         $image = $result['upload_data']['file_name'];
         }

         $data = array('featured_product_name' =>$this->input->post('featured_product_name'),
      'featured_product_image' =>$image,
      'featured_product_url' =>$this->input->post('featured_product_url'),
      'feature_active_status' =>$this->input->post('feature_active_status') );

       $this->Product_Model->insert("gp_product_feature_products",$data);

      $data['featured_product'] =$this->Product_Model->get_featured_products();
      $this->load->view('admin/module/featured_product',$data);
 }
  
   } 
?>