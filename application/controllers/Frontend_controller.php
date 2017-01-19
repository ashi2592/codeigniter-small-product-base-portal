<?php

class  Frontend_controller extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('Product_Model');
	
		$this->load->model("Forntend_model");
		$items = $this->Forntend_model->all();

		$this->load->library("multi_menu");
		$this->multi_menu->set_items($items);
		$this->load->helper('sidebarcategory');
		

		
}
	public function index()
	{
		$data['category'] = $this->Product_Model->category_select();
		$data['random_product']	= $this->Forntend_model->random_product();
		$data['featured_product']	= $this->Forntend_model->featured_product();
		$this->load->view('theme/index', $data);

	}
	public function about()
	{
		$data['category'] = $this->Product_Model->category_select();
		$this->load->view('theme/about', $data);
	}
	public function contact()
	{
			$data['category'] = $this->Product_Model->category_select();
		$this->load->view('theme/contact', $data);
	}
    public function category()
    {
    	$data['category'] = $this->Product_Model->category_select();
   $categoryname = $this->uri->segment(2);
   $cat_data = $this->Forntend_model->get_category($categoryname);
   $cat_id = $cat_data[0]['category_id'];
   $data['category_data'] = $cat_data;
$data['products_list'] = $this->Forntend_model->get_products($cat_id);
$this->load->view('theme/products', $data);
  
    }

    public function product()
    {
    $data['category'] = $this->Product_Model->category_select();
    $product_slug = $this->uri->segment(2);
    $product_data= $this->Forntend_model->get_product($product_slug);
    $category_id  = $product_data[0]['cat_id'];
    $product_id = $product_data[0]['product_id'];
    $data['product_data'] = $product_data;
    $data['cat_data'] = $this->Product_Model->get_category_by_id($category_id);
    $data['product_specification'] = $this->Forntend_model->product_spectfication($product_id);
    $data['related_product'] = $this->Forntend_model->realtedproduct($category_id);
	//print_r($product_data);
	// $cat_id = $cat_data[0]['category_id'];
	// $data['category_data'] = $cat_data;
	$this->load->view('theme/details', $data);

    }

  public function send_enquiry()
  {
  $name = 	$this->input->post('name');
  $email = 	$this->input->post('email');
  $phone = 	$this->input->post('phone');
  $message = 	$this->input->post('message');
  
   $to = "support@globaladmedia";
  $subject = "Global Ad Media Enquiry From iha Vedic ";

  $txt='Hi Enquiry From Global Ad Media Enquiry  !<br /><br />'.ucfirst($name ).' has sent you a message via contact form on your website! <br /><br />
  Name: '.ucfirst($name ).'<br />
  Email: '.ucfirst( $email ).'<br />
  Phone: '.ucfirst( $phone ).'<br />
    Message: '.ucfirst( $message ).'<br />';
   $this->load->library('email');
 
  $this->email->from('info@10timesmedia.com', 'Global Ad Media');
  $this->email->to('ashishemail01@gmail.com');
  // $this->email->cc('another@example.com');
  // $this->email->bcc('and@another.com');
   $this->email->subject($subject);
  $this->email->message($txt);
  
  $this->email->send();
  
  echo $this->email->print_debugger();
  redirect('contact','refresh');
  }



}

/* End of file  .php */
/* Location: ./application/controllers/ .php */