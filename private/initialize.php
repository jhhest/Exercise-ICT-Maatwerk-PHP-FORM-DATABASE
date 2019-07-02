<?php
echo "<p>Remark: Start initialize.php</p>";
require_once('inc/functions.php');
require_once('inc/database.php');


define("SERVER_PATH", $_SERVER['DOCUMENT_ROOT']);
// echo $_SERVER['DOCUMENT_ROOT'];
define("PRIVATE_PATH", dirname(__FILE__));
// echo dirname(__FILE__);
?>