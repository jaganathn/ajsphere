<?php
namespace App\Http\Controllers\Services\Mobile;
use App\Http\Controllers\Master\Master_User;

class User extends Master_User
{
	function __construct()
	{
		parent::__construct();
	}
	/**
	 * Data Output
	 */
	public function output($data)
	{
		echo json_encode($data);
		exit;
	}
}

