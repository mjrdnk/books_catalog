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
            <li><a href="manageBooks.php">All books</a></li>
            <li><a href="create_book.php">Create book</a></li>
            <li><a href="update.php">Update book</a></li>
            <li><a href="delete.php">Delete book</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div id="box">
	<h1>Thank you for adding $book_name</h1>
  <div id="container">
    <a class="btn btn-success btn-lg" href="create_book.php" role="button">Add one more</a>
    <a class="btn btn-default btn-lg" href="list.php" role="button">See all books</a>
  </div>
</div>



</body>
</html>