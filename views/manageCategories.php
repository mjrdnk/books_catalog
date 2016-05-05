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
          <a class="navbar-brand" href="../index.php">Book catalog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">All categories</a></li>
            <li><a href="./createCategory.php">Create category</a></li>
            <li><a href="./updateCategory.php">Update category</a></li>
            <li><a href="./deleteCategory.php">Delete category</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div id="container">

	<div id="categories">
		<h1>categories</h1>
		<ul>
			<li><a href="#">Fiction</a></li>
			<li><a href="#">Non-fiction</a></li>
		</ul>
	</div>

	

	

	</div>
</div>



</body>
</html>