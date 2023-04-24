<?php

$servername = "localhost";
$username = "lekkiler_artisan2";
$password = "C8GaTPTiDCQY4qM";
$dbname = "lekkiler_artisan2";

// Create connection
$dbc = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbc->connect_error) {
  die("Connection failed: " . $dbc->connect_error);
}

?>