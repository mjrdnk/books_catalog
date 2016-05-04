<?php

  require_once('connect.php');

    //
    if(!$connection) {
      echo 'Not connected to the server';
    }

    //
    if(!mysqli_select_db($connection, $db_name)) {
      echo 'Database not selected';
    }

    // variables -- note there's no single quote because it would cause errors in the query
    $id_category = $_POST[id_category];
    $name_category = $_POST[name_category];

    // user has to fill in all the fields in the form so we do not have to care much here -> update all
    $updateCategory = "UPDATE categories SET name_category = '$name_category' WHERE id_category = '$id_category'";

    // The application provides two unmodifiable base categories:
    if($name_category == 'Non-Fiction' || $name_category == 'Fiction') {
      die("Error. You cannot duplicate the base.");
    }

    if(!mysqli_query($connection, $updateCategory)) {
      echo "Error at the query";
    } else {
      readfile("success.php");
    }

  $connection->close();
  
?>