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

<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = '';
$dbuser = '';
$dbpass = '';
$dbname = '';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query

// 3. Use returned data (if any)

// 4. Release returned data

// 5. Close database connection
mysqli_close($connection);

echo "<p>remark: Start of database.php</p>"

 */

/****************************************************************
 * db credentials
 */
$dbhost = 'localhost';
$dbuser = 'jasper';
$dbpass = 'REAcollegeVpro';
$dbname = 'ICT_maatwerk_aanmeldformulier';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

define("DB_SERVER", "localhost");
define("DB_USER", "jasper");
define("DB_PASS", "REAcollegeVpro");
define("DB_NAME", "ICT_maatwerk_aanmeldformulier");

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
}

function db_disconnect($connection){
    if(isset($connection)) { 
        mysqli_close($connection);
    }
}

/****
 * 
 * use $db = db_connect(); everywhere you need to make a connection to the database.  
 *  
 * */ 


?>


