<?php

// parameters for page navigation;

if (isset($_POST['navigation'])) {
    $navigation = 'processed_form';
}

if (!isset($navigation)) {
    $navigation = 'home';
}

if ($navigation == 'home') {
    $page_title = "ICT maatwerk Aanmelding";
} 

if ($navigation == 'processed_form') {
    $page_title = 'Verwerking aanmelding';
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $page_title; ?></title>
</head>