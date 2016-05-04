<?php

  require_once('../connect.php');

  if(!$connection) {
      echo 'Not connected to the server';
    }

    if(!mysqli_select_db($connection,$db_name)) {
      echo 'Database not selected';
    }

    $id_category = $_POST[id_category];
    $name_category = $_POST[name_category];

    $deleteCategory = "DELETE FROM categories WHERE id_category = 'id_category' AND name_category = 'name_category' LIMIT 1";

    // The application provides two unmodifiable base categories:
    if($name_category == 'Non-Fiction' || $name_category == 'Fiction') {
      die("Error. You cannot duplicate the base.");
    }

    if(!mysqli_query($connection, $deleteCategory)) {
      echo "Error at the query";
    } else {
      readfile("../views/success.php");
  }

  $connection->close();
  
?>