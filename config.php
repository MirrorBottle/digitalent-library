<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'digitalent_library';
$databaseUsername = 'root';
$databasePassword = '';
 
$connection = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>