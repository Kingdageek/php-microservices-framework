<?php

// ---------------------------------------------------------------------------------------------------------------------------- //
// CREATED BY: Olayinka Okewale
// Github: https://github.com/olayinkaokewale
// Email: okjool2012@gmail.com
// LinkedIn: https://linkedin.com/in/olayinkaokewale
// ---------------------------------------------------------------------------------------------------------------------------- //

require_once 'engine/engine.class.php';

$Engine = new Engine(); //We will use this to get functions from the engine class.
$feedback = [];

if (isset($_POST["request"])) {
	$req_arr = json_decode($_POST["request"], true); // Parsing json data to request array
	if (isset($req_arr["tag"])) { //If tag is set then find it.
		$tag = $req_arr["tag"]; //Get the tag into a variable
		unset($req_arr["tag"]); //Remove the tag from the array.
		if (method_exists($Engine, $tag)) { //Check if the method tag exist in the engine class.
			$feedback = $Engine->$tag($req_arr);
		} else {
			$feedback = Engine::feedback("Invalid request: invalid method"); //Error message: Method does not exist
		}
	} else {
		$feedback = Engine::feedback("Invalid tag inserted. Try again with another tag"); //Error message
	}
}

header("Content-Type: application/json");

if (!DEBUG) {
	if (isset($feedback["error"])) $feedback["error"] = "debug is off";
}
echo json_encode($feedback);