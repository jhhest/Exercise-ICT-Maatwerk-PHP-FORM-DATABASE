<?php

// Loads information that's needed for every page. ( Also loads database.php and functions.php)
require_once('private/initialize.php'); 

// Loads information that's needed between <head></head> tags. 
require_once('private/page_components/document_head.php'); 

// Loads information that's needed between <body></body> tags. Individual pagecomponents can be found in /private/inc/pagecomponents
require_once('private/page_components/document_body.php');
?>