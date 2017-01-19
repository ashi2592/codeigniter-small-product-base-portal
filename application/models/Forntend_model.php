<?php

class Forntend_model extends CI_Model {



	public function all()
	{
		return $this->db->get("gp_category")
					->result_array();
	}

 public function contact()
 {
 return $this->db->get('gp_contact')->result_array();

 }

public function random_product()
{
	
	return $this->db
	 ->where('product_status =1')	
	->order_by('rand()')
	->limit(6)
	->get('gp_products')
	->result_array();
	}

public function featured_product()
{
	
	return $this->db
	 ->where('feature_active_status =1')	
	->order_by('rand()')
	->limit(6)
	->get('gp_product_feature_products')
	->result_array();
	}

	public function realtedproduct($category_id)
{
	
	return $this->db
	 ->where('cat_id', $category_id)	
	->order_by('rand()')
	->limit(3)
	->get('gp_products')
	->result_array();
	
	}
public function get_category($seo_name)
{
	return $this->db
	 ->like('category_seo_name', $seo_name)
	->get('gp_category')
	->result_array();
}

public function get_product($seo_name)
{
	return $this->db
	 ->like('product_seo_url', $seo_name)
	->get('gp_products')
	->result_array();
}
public function get_products($cat_id)
{
	return $this->db
	 ->get_where('gp_products', array('cat_id' => $cat_id))
		->result_array();
}

public function product_spectfication($product_id)
{
		return $this->db->get_where('gp_product_details', array('p_id' => $product_id))
		->result_array();
}

}

/* End of file Forntend_model.php */
/* Location: ./application/models/Forntend_model.php */