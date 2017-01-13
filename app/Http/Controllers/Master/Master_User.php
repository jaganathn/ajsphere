<?php

namespace App\Http\Controllers\Master;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Master_User extends BaseController
{
	function __construct()
	{
		parent::__construct();
	}
	/**
	 * Adding User
	 */
	public function add_user()
	{
		$this->manage_user();
		$data['data'] = 'Add User';
		$this->output($data);
	}
	/**
	 * Search User
	 */
	public function search_user()
	{
		$this->manage_user();
		$data['data'] = 'Search User';
		$this->output($data);
	}
	/**
	 * Edit User
	 */
	public function edit_user()
	{
		$this->manage_user();
		$data['data'] = 'Edit User';
		$this->output($data);
	}
	/**
	 * Update User
	 */
	public function update_user()
	{
		$this->manage_user();
		$data['data'] = 'Update User';
		$this->output($data);
		
	}
	/**
	 * Mnage User
	 */
	public function manage_user()
	{
		//use laravel functionality to read get/post data
		$get_data = $_GET;
		$post_data = $_POST;
		
		if(is_array($get_data) == true && count($get_data) > 0 && isset($get_data['user_id']) == true && 
				empty($get_data['user_id']) == false && is_array($post_data) == false){
			//Edit User
			//Get data based on User ID
		} else if(is_array($post_data) == true && count($post_data) > 0){//Add/Update User
			if(isset($post_data['user_id']) == true && intval($post_data['user_id']) > 0){
				//Udate the User using User ID
			} else {
				//Add new User
			}
		}
		
	}
}

