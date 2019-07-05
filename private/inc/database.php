<?php

/***************************************************
 * Setup Database connection.
 *************************************************** 
  
CRUD
 
C Create
R Read
U Update
D Delete

mysql --version
 * Check mysql version

mysql -u root(depends on installation if you have a password needed )
 * Login 

mysql -u root -p
 * Set a password 

SHOW DATABASES;
CREATE DATABASE db_name;
USE db_name
DROP DATABASE db_name;
Make a user with specific acces to a specific user. Limits the scope of acces to mysql to your databases. 

GRANT ALL PRIVILEGES ON db_name.*
TO 'username'@'localhost'
IDENTIFIED BY 'password';

SHOW GRANTS FOR 'username'@'localhost'
 

/**************************************************************
 * DB Guide Linkedin learning
 **************************************************************

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'webuser';
$dbpass = 'secretpassword';
$dbname = 'globe_bank';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Test if connection succeeded
if(mysqli_connect_errno()) {
  $msg = "Database connection failed: ";
  $msg .= mysqli_connect_error();
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
}

// 2. Perform database query
$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);

// Test if query succeeded
if (!$result_set) {
	exit("Database query failed.");
}

// 3. Use returned data (if any)
while($subject = mysqli_fetch_assoc($result_set)) {
  echo $subject["menu_name"] . "<br />";
}

// 4. Release returned data
mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);

*/

/****************************************************************
 * db credentials
 */

echo "<p>remark: Start of database.php</p>";

define("DB_SERVER", "localhost");
define("DB_USER", "jasper");
define("DB_PASS", "REAcollegeVpro");
define("DB_NAME", "ICT_maatwerk_aanmelding");

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}

function db_disconnect($connection){
    if(isset($connection)) { 
        mysqli_close($connection);
    }
}

/****
 * 
 * use $db = db_connect(); everywhere you need to make a connection to the database.  
 * use dbdisconnect($db); everywhere you need to disconnect from the database. 
 * */ 


?>


