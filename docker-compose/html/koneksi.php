<?php
// MySQL connection
$username = "root"; //mysql username
$password = "pass"; //mysql password
$hostname = "weblogin_mysql_1"; //hostname
$databasename = 'login'; //databasename

//connect to database
$mysqli = new mysqli($hostname, $username, $password, $databasename);

?>
