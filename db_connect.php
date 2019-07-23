<?php
  $dbhost = 'localhost';
  $dbname = 'social';
  $dbuser = 'root';
  $dbpass = 'mysql';

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die("Fatal Error");
?>
