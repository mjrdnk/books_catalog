<?php

  require_once('../connect.php');

  if(!$connection) {
      echo 'Not connected to the server';
    }

    if(!mysqli_select_db($connection,$db_name)) {
      echo 'Database not selected';
    }

    $id_category = $_POST["id_category"];
    $name_category = $_POST["name_category"];

    $deleteCategory = "DELETE FROM categories WHERE id_category = '$id_category' AND name_category = '$name_category' LIMIT 1";

    // The application provides two unmodifiable base categories:
    if($name_category == 'Non-Fiction' || $name_category == 'Fiction') {
      die("<h1>Error. Give other category name.</h1>");
    }
    // The application provides two unmodifiable base categories:
    if($id_category == 1 || $id_category == 2) {
      die("<h1>Error. The ID 1 and 2 are reserved.</h1>");
    }

    if(!mysqli_query($connection, $deleteCategory)) {
      echo "Error at the query";
    } else {
      readfile("../views/success.php");
  }

  $connection->close();
  
?>