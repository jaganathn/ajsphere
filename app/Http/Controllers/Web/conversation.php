<?php
/**
 * Conversation class for web module
 *
 * Manages Conversation between agent and admin
 *
 * @author     Jaganath
 */
namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Master\Master_Conversation;
class Conversation extends Master_Conversation
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
