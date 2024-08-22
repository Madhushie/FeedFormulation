<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "feed_formulation_db";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection error: {$conn->error}");
  }