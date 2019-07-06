<?php

// Loads information regarding functions that are used through the website. 
require_once('inc/functions.php'); 
// Loads information that is needed to set database paramaters and functions needed particular use for database practices. 
require_once('inc/database.php'); 

// constants. 
define("SERVER_PATH", $_SERVER['DOCUMENT_ROOT']); // sets a global variable with path of document root. 
define("PRIVATE_PATH", dirname(__FILE__)); // Sets a global variable to folder private


// Sets a variable to keep track of which paged is viewed. 
setup_navigation();

?>