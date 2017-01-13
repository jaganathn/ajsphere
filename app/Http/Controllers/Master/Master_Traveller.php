<?php
/**
 * Parent Class of Traveller class
 *
 * Manages Traveller informations
 *
 * @author     Jaganath
 */
namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;



class Master_Traveller extends Controller
{
	function __construct()
	{
		
	}
	/**
	 * Jaganath
	 * Add or Update the Traveller Details
	 */
	function manage_traveller()
	{
		//TODO: check authority for all operation and log the invalid access logs
		$result = array();
		$result['status'] = true;
		$result['message'] = '';
		$result['data'] = array();
		$post_data = array();
		$post_data['salutation'] = 'Mr';
		$post_data['first_name'] = 'Test';
		$post_data['last_name'] = 'Test';
		$post_data['gender'] = 'M';
		$post_data['date_of_birth'] = '1990-01-01';
		$post_data['passport_number'] = 'TEST1211';
		$post_data['passport_issuing_country'] = '91';
		$post_data['passport_expiry_date'] = '2022-01-10';
		$post_data['frequent_flyer'] = 1;
		$post_data['email_id'] = 'Test@test.com';
		$post_data['mobile_number'] = '1234567890';
		$post_data['status'] = '1';
		if(is_array($post_data) == true && count($post_data) > 0){
			$rules = array(
					'salutation'				=>'required|alpha|min:1|max:6',
					'first_name'				=>'required|alpha|min:2|max:30',
					'last_name'					=>'required|alpha|min:2|max:15',
					'gender'					=>'required|alpha|min:1|max:1',
					'date_of_birth'				=>'date_format:Y-m-d|before:today',
					'passport_number'			=>'alpha_num|min:7|max:10',
					'passport_issuing_country'	=>'numeric|digits_between:1,3',
					'passport_expiry_date'		=>'date_format:Y-m-d|after:today',
					'frequent_flyer'			=>'required|numeric|min:1|max:1',
					'email_id'					=>'required|email|max:45',
					'mobile_number'				=> 'required|digits:10',
					'status'					=> 'required|numeric|min:1|max:1'
			
			);
			//validate against the inputs from our form
			$validator = Validator::make($post_data, $rules);
			if ($validator->fails() == false) {//If Validation is success
				if(isset($post_data['origin']) == true && intval($post_data['origin']) >0){
					$origin = intval($post_data['origin']);
				} else {
					$origin = 0;
				}
				if (intval ( $origin ) == 0) {
					// model function call to insert data
					$result['status'] = true;
					$result['message'] = 'Added Successfully';
				} else if(intval ( $origin ) > 0){
					// model function call to update data
					$result['status'] = true;
					$result['message'] = 'Updated Successfully';
				}
			} else {//If Validation is failed
				$result['status'] = false;
				$result['message'] = $validator->errors()->all();//Error Messages
			}
		} else {
			$get_data = '';
			if(isset($get_data['edit_origin']) == true && intval($get_data['edit_origin']) > 0){
				//Get Traveller Data based on origin
				$result['status'] = true;
				$result['data'] = '';
			} elseif (isset($get_data['search_params'])){
				//Get Data Based on Search Params
				$result['status'] = true;
				$result['data'] = '';
			} else {
				//Return Added Traveller List
				$result['status'] = true;
				$result['data'] = '';
			}
		}
		$this->output($result);
	}
}

