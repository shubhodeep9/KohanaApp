<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller_Rest {

	/**
	 * Post method handler for KohanaRest
	 */
	public function action_create(){
		//Getting the details
		$post_data = $this->request->post();
		
		//creating an instance for user model
		$user = new Model_User;
		$user->email = $post_data['email'];
		$user->password = $post_data['password'];
		$user->save();
		$this->response->body(json_encode(2));
	}

	/**
	 * method to set the header
	 */
	public function after(){
		$this->response->headers('Content-Type','application/json');
		parent::after();
	}
}