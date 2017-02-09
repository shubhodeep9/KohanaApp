<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => 'anything',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',
	'users' => array(),
);
