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
            <li><a href="./manageCategories.php">All categories</a></li>
            <li><a href="./createCategory.php">Create category</a></li>
            <li class="active"><a href="./updateCategory.php">Update category</a></li>
            <li><a href="./deleteCategory.php">Delete category</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div id="box">
	<h1>Update existing category</h1>
	<form action="../controllers/dbUpdateCategory.php" method="post" class="navbar-form navbar-left" role="search">
  		<div class="form-group">
	  		<div><input type="text" class="form-control" name="id_category" placeholder="Category's ID" required></div>
      <div><input type="text" class="form-control" name="name_category" placeholder="Category's new name" required></div>
  			<div><button type="submit" class="btn btn-default">Update</button></div>
  		</div>
	</form>
  <!-- back button sending back to the main page index.php -->
  <div id="container">
    <a class="btn btn-default backbutton" href="../index.php" role="button">Go to catalog</a>
  </div>
</div>



</body>
</html>