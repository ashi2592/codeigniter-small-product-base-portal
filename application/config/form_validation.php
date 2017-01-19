<?php

$config = [

		'password'		=>	[
														[
															'field'	=>	'oldpassword',
															'label'	=>	'Old Password',
															'rules'	=>	'required'
														],
														[
															'field'	=>	'newpassword',
															'label'	=>	'Password',
															'rules'	=>	'required|matches[confirmpassword]',
														],
														[
															'field'	=>	'confirmpassword',
															'label'	=>	'Confirm Password',
															'rules'	=>	'required',
														]
									],

		'product'  		=> 			[
										[
										'field'	=>	'oldpassword',
										'label'	=>	'Old Password',
										'rules'	=>	'required'
										]

									],
		'contact'  		=> 			[
										[
										'field'	=>	'phone',
										'label'	=>	'Phone Number',
										'rules'	=>	'required'
										],
										[
											'field'	=>	'email',
											'label'	=>	'Email Id',
											'rules'	=>	'required|valid_email'

										],
										[
											'field'	=>	'address',
											'label'	=>	'Address',
											'rules'	=>	'required'

										],

									],
	'admin_login'			=>	[
														[
															'field'	=>	'username',
															'label'	=>	'User Name',
															'rules'	=>	'required|trim',
														],
														[
															'field'	=>	'password',
															'label'	=>	'Password',
															'rules'	=>	'required',
														]
									]



];