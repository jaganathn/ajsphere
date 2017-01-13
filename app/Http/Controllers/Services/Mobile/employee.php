<?php
/**
 * Employee class for mobile module
 *
 * Manages emplyoee operations
 *
 * @author     Jaganath
 */
namespace App\Http\Controllers\Services\Mobile;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Master\Master_Employee;
class Employee extends Master_Employee
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
