<?php
  $DB_SERVER = 'localhost';
  $DB_USER = 'root';
  $DB_PASSWORD  = '';
  $DB_NAME = 'shoppify';

  // create connection
  $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);

  // check connection
  if($conn -> connect_error){
    die('Connection Failed' . $conn->connect_error);
  }
?>