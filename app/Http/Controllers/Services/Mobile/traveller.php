<?php
/**
 * Traveller class for mobile module
 *
 * Manages Traveller informations
 *
 * @author     Jaganath
 */
namespace App\Http\Controllers\Services\Mobile;

use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Master\Master_Traveller;
class Traveller extends Master_Traveller
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
