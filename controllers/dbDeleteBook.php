<?php

  require_once('../connect.php');

  if(!$connection) {
      echo 'Not connected to the server';
    }

    if(!mysqli_select_db($connection,$db_name)) {
      echo 'Database not selected';
    }

    $id_book = $_POST["id_book"];
    $name_book = $_POST["name_book"];

    $deleteBook = "DELETE FROM books WHERE id_book = '$id_book' AND name_book = '$name_book' LIMIT 1";

    if(!mysqli_query($connection, $deleteBook)) {
      echo "Error at the query";
    } else {
      readfile("../views/success.php");
  }

  $connection->close();
  
?>