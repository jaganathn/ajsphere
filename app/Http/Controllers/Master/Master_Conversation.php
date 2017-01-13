<?php
/**
 * Parent Class of Conversation class
 *
 * Manages Conversation between agent and admin
 *
 * @author     Jaganath
 */
namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



class Master_Conversation extends Controller
{
	function __construct()
	{
		
	}
	/**
	 * Jaganath
	 * Sending message to Admin
	 * Shows communication history
	 */
	function manage_conversation()
	{
		//TODO: check authority for all operation and log the invalid access logs
		$result = array();
		$result['status'] = true;
		$result['message'] = '';
		$result['data'] = array();
		$post_data = array();
		$post_data['agent_id'] = 1;
		$post_data['message'] = 'Testing';
		$post_data['upload_file'] = '';
		if(is_array($post_data) == true && count($post_data) > 0){
			$rules = array(
					'agent_id'				=>'required|numeric|digits_between:1,10',
					'message'				=>'required|min:5',
					'upload_file'			=>'file'
			);
			//validate against the inputs from our form
			$validator = Validator::make($post_data, $rules);
			if ($validator->fails() == false) {//If Validation is success
				if(isset($post_data['communication_log_id']) == true && empty($post_data['communication_log_id']) == false){
					$communication_log_id = trim($post_data['communication_log_id']);
				} else {
					$communication_log_id = '';//Generate Communication Log Id
				}
				// model function call to insert data
				$result['status'] = true;
				$result['message'] = 'Sent Successfully';
			} else {//If Validation is failed
				$result['status'] = false;
				$result['message'] = $validator->errors()->all();//Error Messages
			}
		} else {
			$get_data = '';
			if (isset($get_data['search_params'])){
				//Get Data Based on Search Params
				$result['status'] = true;
				$result['data'] = '';
			} else {
				//Return User Communication List with Admin
				$result['status'] = true;
				$result['data'] = '';
			}
		}
		$this->output($result);
	}
}
