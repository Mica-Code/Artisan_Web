<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artisan2";
// Create connection
$dbc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbc->connect_error) {
  die("Connection failed: " . $dbc->connect_error);
}

//code snippet for multiple select and save to database in php?

?>  