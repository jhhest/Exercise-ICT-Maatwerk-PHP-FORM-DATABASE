<?php

function setup_navigation($nav_index = 'home') {
    global $page_navigation;
    if (isset($_POST["navigation"]) && ($_POST["navigation"] == 'processed_form')) {
        $page_navigation = 'process_form';
    } else {
        $page_navigation = $nav_index;
        }
    echo "<br>inside function:" . $page_navigation . "<br>";
    return $page_navigation; //Added return function in case value of $page_navigation needs to be checked. 
    }
echo "<br>output:" . $_SERVER['DOCUMENT_ROOT'];
function load_main_content() { 
    global $page_navigation;
    switch ($page_navigation) {
        case 'process_form':
            include_once($_SERVER['DOCUMENT_ROOT'] . "/private/page_components/page_application_result.php");
            echo "page application result";
            break;
        case 'home':
            include_once($_SERVER['DOCUMENT_ROOT'] . '/private/page_components/document_application_form.php');
        break; 
        default:
            include_once($_SERVER['DOCUMENT_ROOT'] . '/private/page_components/document_application_form.php'); 
    } 
}

    //
    //

?>