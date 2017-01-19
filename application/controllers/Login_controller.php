<?php
class Login_controller extends CI_Controller {
	
public function index()
	{
		if( $this->session->userdata('user_id') )
			return redirect('admin/panel');
				$this->load->view('admin/login');
	}


	public function admin_login()
	{
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		
		if( $this->form_validation->run('admin_login') ) { //if validation passes
			//Success
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('Login_Model');

			$login_id = $this->Login_Model->login_valid($username, $password);
			if( $login_id ) {
				
				$this->session->set_userdata('user_id', $login_id );
				return redirect('admin/panel');

				//credentials valid, login user.
			}
			 else {
				$this->session->set_flashdata('login_failed','Invalid Username/Password.');
				return redirect('admin/login');
			}
		} else {
			
			$this->load->view('admin/login');
			// echo validation_errors();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('admin/login');
	}
                  

     }
?>