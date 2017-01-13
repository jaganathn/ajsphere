<?php
/**
 * Conversation class for mobile module
 * 
 * Manages Conversation between agent and admin
 * 
 * @author     Jaganath
 */
namespace App\Http\Controllers\Services\Mobile;

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
		echo json_encode($data);
		exit;
	}
}
