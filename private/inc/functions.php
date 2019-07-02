<?php
echo '<p>remark: Start of functions.php </p>';

// echo '<p>remark: test $SERVER_PATH </p>';
// echo $SERVER_PATH;

function url_for($url_path)
{
    if ($url_path[0] != '/') {
        $url_path = "/" . $url_path;
    }
    return SERVER_PATH . $url_path;
}
