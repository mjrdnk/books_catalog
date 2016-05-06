<?php

  require_once('../connect.php');

  if(!$connection) {
      echo 'Not connected to the server';
    }

    if(!mysqli_select_db($connection,$db_name)) {
      echo 'Database not selected';
    }

    $name_book = $_POST['name_book'];
    $author = $_POST['author'];
    $page_count = $_POST['page_count'];
    $category = $_POST['category'];
    $price = $_POST['price'];

    $createBook = "INSERT INTO books (name_book, author, page_count, category, price) VALUES ('$name_book', '$author', '$page_count', '$category', '$price')";

    $existingCategory = "SELECT name_category FROM categories";
    
    if($category != $existingCategory) {
      $createCategory = "INSERT INTO categories (name_category) VALUES ('$category')";
      if(!mysqli_query($connection, $createCategory)) {
        echo "Error at the query";
      }
    }
    
    

    if(!mysqli_query($connection, $createBook)) {
      echo "Error at the query";
    } else {
      readfile("../views/success.php");
    }

  $connection->close();
  
?>