<?php

  require_once('connect.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>books catalog</title>

	<!-- BOOTSTRAP: Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="./styles.css">

	<!-- jQuery 2.2.2 minified version -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<!-- js scripts -->
	<script type="text/javascript" src="script.js"></script>

</head>
<body>

<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Book catalog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="create_book.php">Create book</a></li>
            <li><a href="list.php">List books</a></li>
            <li><a href="update.php">Update book</a></li>
            <li><a href="delete.php">Delete book</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div id="box">
  <h1>Update a book</h1>
  <form class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <div><input type="text" class="form-control" name="name_book" placeholder="Book's name" required><div>
        <div><input type="text" class="form-control" name="author" placeholder="Author" required></div>
        <div><input type="text" class="form-control" name="page_count" placeholder="Number of Pages" required></div>
        <div><input type="text" class="form-control" name="category" placeholder="Category" required></div>
        <div><input type="text" class="form-control" name="price" placeholder="Price" required></div>
      <div><button type="submit" class="btn btn-default">Update</button></div>
    </div>
  </form>
</div>



</body>
</html>