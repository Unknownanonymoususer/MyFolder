<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'abc';

    // Connect To Database

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    // Check Connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    //   echo "Connected successfully";

    // To Get User data to table
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $comment = $_POST['comment'];

    // Inserting sql Command 

    $sql = "INSERT INTO `userinformation` (`name`, `email`, `number`, `comment` ) 
    VALUES ('$name', '$email', '$number', '$comment')";

    // Checking sql

    // echo $sql;

    // Inserting Data into table & Checking Error

    if ($conn->query($sql) == TRUE) {
        // echo "New record created successfully";
      } else {
        echo "Error: ";
      }
    
      header('location:../index.php#Contact');
    
    $conn->close();

    ?>