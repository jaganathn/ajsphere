<?php
/**
 * Parent Class of employee class
 *
 * Manages emplyoee operations
 *
 * @author     Jaganath
 */
namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



class Master_Employee extends Controller
{
	function __construct()
	{
		
	}
	/**
	 * Jaganath
	 * Sending message to Admin
	 * Shows communication history
	 */
	function set_booking_amount_limit()
	{
		//TODO: check authority for all operation and log the invalid access logs
		$result = array();
		$result['status'] = true;
		$result['message'] = '';
		$result['data'] = array();
		$post_data = array();
		$post_data['employee_id'] = 10;
		$post_data['amount'] = 500000;
		$post_data['module'] = array('FB01', 'BB02');
		if(is_array($post_data) == true && count($post_data) > 0){
			$rules = array(
					'employee_id'	=>'required|numeric|digits_between:1,10',
					'amount'		=>'required|numeric',
					'module'		=>'required|array'
			);
			//validate against the inputs from our form
			$validator = Validator::make($post_data, $rules);
			if ($validator->fails() == false) {//If Validation is success
				// model function call to insert/update data
				$result['status'] = true;
				$result['message'] = 'Set Successfully';
			} else {//If Validation is failed
				$result['status'] = false;
				$result['message'] = $validator->errors()->all();//Error Messages
			}
		} else {
			$get_data = array();
			if(isset($get_data['employee_id']) == true && intval($get_data['employee_id']) > 0){
				//Get the employee booking amount limit details
				$result['status'] = true;
				$result['data'] = '';
			}
		}
		$this->output($result);
	}
}
