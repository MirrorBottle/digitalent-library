<?php
/**
 * using mysqli_connect for database connection
 */
require __DIR__ . '/vendor/autoload.php';

$databaseHost = 'localhost';
$databaseName = 'digitalent_library';
$databaseUsername = 'root';
$databasePassword = '';
 
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!$connection) {
  die('Connection Error: ' . mysqli_connect_errno());
}
?>