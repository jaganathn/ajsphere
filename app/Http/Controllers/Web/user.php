<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\ParentControllers\Master_User;
use Illuminate\Support\Facades\Request;
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
		echo view(strtolower(class_basename(__CLASS__)).'/'.Request::segment(2), $data);	
	}
	
	
}

