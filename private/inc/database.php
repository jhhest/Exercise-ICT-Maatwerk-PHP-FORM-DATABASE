<?php

/***************************************************
 * 
 * Setup Database connection. 
 *  
 * CRUD
 * 
 * C Create
 * R Read
 * U Update
 * D Delete
 * 
 * mysql --version
 * * Check mysql version
 * 
 * mysql -u root(depends on installation if you have a password needed )
 * * Login 
 * 
 * mysql -u root -p
 *  * Set a password 
 * 
 * SHOW DATABASES;
 * CREATE DATABASE db_name;
 * USE db_name
 * DROP DATABASE db_name;
 *
 * Make a user with specific acces to a specific user. Limits the scope of acces to mysql to your databases. 
 * 
 * GRANT ALL PRIVILEGES ON db_name.*
 * TO 'username'@'localhost'
 * IDENTIFIED BY 'password';
 * 
 * SHOW GRANTS FOR 'username'@'localhost'
 *  
 */
echo "<p>remark: Start of database.php</p>"


?>