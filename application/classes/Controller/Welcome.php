<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$user = ORM::factory('User');
		$this->response->body('hello, world!');
	}

} // End Welcome
