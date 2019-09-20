<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'kapebobo');
// $conn = mysqli_connect('localhost', 'u152248926_root', 'JAjArB9sKKyx', 'u152248926_datab');

if($conn->connect_error)
  {
    // check the connection
    die('connection failed ' . $conn->connect_error);
  }
