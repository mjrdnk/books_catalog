<?php

  require_once('../connect.php');       

?>

<!DOCTYPE html>
<html>
<head>
  <title>books catalog</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- BOOTSTRAP: Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- stylesheets -->
  <link rel="stylesheet" type="text/css" href="../styles.css">

  <!-- jQuery 2.2.2 minified version -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <!-- Latest compiled and minified JavaScript Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <!-- js scripts -->
  <script type="text/javascript" src="./script.js"></script>

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
          <a class="navbar-brand" href="../index.php">Book catalog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./manageBooks.php">All books</a></li>
            <li class="active"><a href="./createBook.php">Create book</a></li>
            <li><a href="./updateBook.php">Update book</a></li>
            <li><a href="./deleteBook.php">Delete book</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div id="box">
	<h1>Create a book</h1>
	<form action="../controllers/dbCreateBook.php" method="post" class="navbar-form navbar-left" role="search">
  		<div class="form-group">
  	  		<div><input type="text" class="form-control" name="name_book" placeholder="Book's name" required><div>
	        <div><input type="text" class="form-control" name="author" placeholder="Author" required></div>
	        <div><input type="text" class="form-control" name="page_count" placeholder="Number of Pages" required></div>
	        <div><input type="text" class="form-control" name="category" placeholder="Category" required></div>
	        <div><input type="text" class="form-control" name="price" placeholder="Price" required></div>
  			<div><button type="submit" class="btn btn-success">Submit</button></div>

        

  		</div>
	</form>

  <!-- back button sending back to the main page index.php -->
  <div id="container">
    <a class="btn btn-default backbutton" href="../index.php" role="button">Go to catalog</a>
  </div>
</div>



</body>
</html>