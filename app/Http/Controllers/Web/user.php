<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Master\Master_User;
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
	public function output($data, $view_path='')
	{	
		$view_path = trim($view_path);
		if(empty($view_path) === true){
			$view_path = strtolower(class_basename(__CLASS__)).'/'.Request::segment(2);
		}
		echo view($view_path, $data);	
	}
	
	
}

