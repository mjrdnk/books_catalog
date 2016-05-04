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
            <li><a href="manageCategories.php">All categories</a></li>
            <li><a href="createCategory.php">Create category</a></li>
            <li><a href="updateCategory.php">Update category</a></li>
            <li><a href="deleteCategory.php">Delete category</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div id="box">
	<h1>Thank you for adding category</h1>
  <div id="container">
    <a class="btn btn-success btn-lg" href="createCategory.php" role="button">Add one more</a>
    <a class="btn btn-default btn-lg" href="manageCategories.php" role="button">See all categories</a>
  </div>
</div>



</body>
</html>