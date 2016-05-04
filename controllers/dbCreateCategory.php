<?php

  require_once('../connect.php');

  if(!$connection) {
      echo 'Not connected to the server';
    }

    if(!mysqli_select_db($connection,$db_name)) {
      echo 'Database not selected';
    }

    $name_category = $_POST['name_category'];

    $createCategory = "INSERT INTO categories (name_category) VALUES ('$name_category')";

    // The application provides two unmodifiable base categories:
    if($name_category == 'Non-Fiction' || $name_category == 'Fiction') {
      die("Error. You cannot duplicate the base.");
    }

    if(!mysqli_query($connection, $createCategory)) {
      echo "Error at the query";
    } else {
      readfile("../views/success.php");
  }

  $connection->close();
  
?>