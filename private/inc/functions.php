<?php

function setup_navigation($nav_index = 'home')
{
    global $page_navigation; // FIXME: is this the right way to declare this variable?
    if (isset($_POST["navigation"]) && ($_POST["navigation"] == 'processed_form')) {
        $page_navigation = 'process_form';
    } else {
        $page_navigation = $nav_index;
    }
    return $page_navigation; //Added return function in case value of $page_navigation needs to be checked. 
}

// functions decides which page components to load by maken use op $page_navigation
function load_main_content($page_navigation_label)
{
    switch ($page_navigation_label) {
        case 'process_form':
            include_once($_SERVER['DOCUMENT_ROOT'] . "/private/page_components/page_application_result.php");
            break;
        case 'home':
            include_once($_SERVER['DOCUMENT_ROOT'] . '/private/page_components/document_application_form.php');
            break;
        default:
            include_once($_SERVER['DOCUMENT_ROOT'] . '/private/page_components/document_application_form.php');
    }
}

function setup_page_title($page_navigation_label)
{
    switch ($page_navigation_label) {
        case 'process_form':
            return "Verwerkte gegevens aanmelding";
            break;
        case 'home':
            return "Aanmelding ICT maatwerk";
            break;
        default:
            return "Aanmelding ICT maatwerk";
    }
}
?>