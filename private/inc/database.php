<?php

define("DB_SERVER", "localhost");
define("DB_USER", "jasper");
define("DB_PASS", "REAcollegeVpro");
define("DB_NAME", "ICT_maatwerk_aanmelding");

// Use $db = db_connect(); everywhere you need to make a connection to the database.  
function db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}
// Use db_disconnect($db) to disconnect from database. 
function db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

/**
 * Query functions
 */

// Use db_insert() to execute an mySQL insert statement. 
// db_insert needs sql statement as a parameter. 
function db_insert($sql)
{
    $db = db_connect();
    $result = mysqli_query($db, $sql);
    $insert_id = mysqli_insert_id($db);
    db_disconnect($db);
    return $insert_id;
}




