<?php

// ---------------------------------------------------------------------------------------------------------------------------- //
// CREATED BY: Olayinka Okewale
// Github: https://github.com/olayinkaokewale
// Email: okjool2012@gmail.com
// LinkedIn: https://linkedin.com/in/olayinkaokewale
// ---------------------------------------------------------------------------------------------------------------------------- //

DEFINE('DEBUG', true);
DEFINE("PRODUCTION", false);

if (PRODUCTION) {
	DEFINE ('DB_NAME', 'database');
	DEFINE ('DB_USER', 'db_user'); // If you have custom user for your database, insert it here
	DEFINE ('DB_PASS', 'db_password'); //change this to the password
	DEFINE ('DB_HOST', 'hostaddr');
} else {
	DEFINE ('DB_NAME', 'test');
	DEFINE ('DB_USER', 'root'); // If you have custom user for your database, insert it here
	DEFINE ('DB_PASS', ''); //change this to the password
	DEFINE ('DB_HOST', '');
}