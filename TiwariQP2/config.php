<?php
  //config file --> used to connect to server

  //define vars
  $servername = "localhost";
  $username = "root";
  $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
?>