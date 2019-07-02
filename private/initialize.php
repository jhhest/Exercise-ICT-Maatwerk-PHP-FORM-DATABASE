<?php

echo "<p>Remark: Start initialize.php</p>";
require_once('inc/functions.php');
require_once('inc/database.php');

// constant is a variable. When defined and a value is assigned the value can't be changed anymore.  
// constants: When defined  you can acces them everywhere. 
// Do not use a $ sign 
define("SERVER_PATH", $_SERVER['DOCUMENT_ROOT']);

define("PRIVATE_PATH", dirname(__FILE__));

?>