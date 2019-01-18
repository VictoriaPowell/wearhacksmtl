<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
	function receive(Request $request) {
		$file_h = fopen(dirname(__FILE__) . "/../../../public/endpoint_rcv", "a+");
		ob_start();
		var_dump($request->getContent());
		$result = ob_get_clean();

		fwrite($file_h, $result);
		return $result;
	}
}