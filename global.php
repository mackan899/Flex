<?php

session_start();

#PHP settings

ini_set("display_errors", 1);
    error_reporting(E_ALL);

	// Creates a fake session for the user to be able to reach the profil.php file.
	# $_SESSION['username'] = 'marcus';


#Page restrictions

	#rulo = TRUE : User session needs to be on. FALSE: User session needs to be off
	#neutral_rulo = TRUE : The page is neutral. accessable in any case. (rulo has to be false)


	#if nothing is set, neutral_rulo is true and rulo is false. Meaning no session required and vice verse.

	if(defined('neutral_rulo') == FALSE && defined('rulo') == FALSE)
	{
		define('rulo', FALSE);
		define('neutral_rulo', TRUE);

		// nothing is set. Therfore the page should be neutral.
	}

	if(defined('neutral_rulo') == false) define('neutral_rulo', FALSE);
	if(defined('rulo') == false) define('rulo', FALSE);

	#if rulo true, neutral_rulo should always be false.

	if(rulo == TRUE && neutral_rulo == TRUE)
	{
		die("Concor CMS error: Rulo and neutral_rulo cannot be TRUE at the same time.");
	}


	if(rulo == TRUE && !isset($_SESSION['username'])) header("location: login.php");
	if(rulo == FALSE && isset($_SESSION['username']) && neutral_rulo == FALSE) header("location: profil.php");



# classes inload

require './php/database.class.php';
require './php/users.class.php';

$users = new users();

# Page variables
