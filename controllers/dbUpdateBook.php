<?php

  require_once('../connect.php');

  //
  if(!$connection) {
      echo 'Not connected to the server';
    }

    //
    if(!mysqli_select_db($connection,$db_name)) {
      echo 'Database not selected';
    }

    // must be for WHERE
    $id_book = $_POST[id_book];

    $name_book = $_POST[name_book];
    $author = $_POST[author];
    $page_count = $_POST[page_count];
    $category = $_POST[category];
    $price = $_POST[price];

    $updateBook = "UPDATE books SET name_book = '$name_book', author = '$author', page_count = '$page_count', category = '$category', price = '$price' WHERE id_book = '$id_book'";

    if(!mysqli_query($connection, $updateBook)) {
      echo "Error at the query";
    } else {
      readfile("../views/success.php");
  }

  $connection->close();
  
?>