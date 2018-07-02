<?php

// ---------------------------------------------------------------------------------------------------------------------------- //
// CREATED BY: Olayinka Okewale
// Github: https://github.com/olayinkaokewale
// Email: okjool2012@gmail.com
// LinkedIn: https://linkedin.com/in/olayinkaokewale
// ---------------------------------------------------------------------------------------------------------------------------- //

DEFINE("PRODUCTION", false);

if (PRODUCTION) {
	require_once 'online_config.php';
} else {
	require_once 'config.php';
}
require_once 'Model.php';

class Engine extends Model {
	
	// ---------------------------------------------------------------------------------------------------------------------------- //
	// CREATE PUBLIC METHODS AND USE THE METHOD NAME AS THE TAG VALUE IN YOUR JSON REQUEST.
	// Example: 
	// -> In the engine class file:
	// public function xyz() { ... }
	// -> From the request post, send this along with the other parameters:
	// {"tag":"xyz", "param1":"value1", "param2":"value2", "param3":"value3", ...}
	// ---------------------------------------------------------------------------------------------------------------------------- //

	//Test method to return JSON string.
	public function test($arr=[]) {
		return parent::feedback("This is a test result", 1); //Success.
	}

}