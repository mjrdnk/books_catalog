<?php

	require_once('connect.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>books catalog</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- BOOTSTRAP: Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="./styles.css">

	<!-- jQuery 2.2.2 minified version -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- js scripts -->
	<script type="text/javascript" src="./script.js"></script>

</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
      <div class="container">

          <a class="navbar-brand" href="#">Book catalog</a>
        
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        
        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./views/manageBooks.php">Manage books</a></li>
            <li><a href="./views/manageCategories.php">Manage categories</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!-- main container which stores: categories and books - look up css flexbox styling for more info -->
<div id="container">

	<!-- categories list -->
	<div id="categories">
		<h1>categories</h1>
		<ul>
			<?php
		          
		          $categories = "SELECT * FROM categories ORDER BY id_category";
		          $query = mysqli_query($connection, $categories);

		          // if there is any error with connection, print error on the screen
		          if($connection->connect_errno!=0) {
		            echo "Error:".$connection->connect_errno;
		          } else {

		          	// populating the unordered list with positions from the database
		            while($row = mysqli_fetch_assoc($query)) {
		              
		              echo "<input type='radio' id='searchInput' name='name_category'> ".$row['name_category']."<br>";
		              
		            }
		          }
        		?>
		</ul>
	</div>

	<div id="books">
		<h1>books</h1>

		

		<table class="table table-hover">
			<thead>
				<tr>
		          <td><b>ID</b></td>
		          <td><b>Name</b></td>
		          <td><b>Author</b></td>
		          <td><b>Pages</b></td>
		          <td><b>Category</b></td>
		          <td><b>Price</b></td>
        		</tr>
			</thead>
			<tbody id="fbody">
				<?php
		          
		          $books = "SELECT * FROM books ORDER BY name_book";
		          $result = mysqli_query($connection, $books);

		          // if there is any error with connection, print error on the screen
		          if($connection->connect_errno!=0) {
		            echo "Error:".$connection->connect_errno;
		          } else {

		          	// populating the table with positions from the database
		            while($row = mysqli_fetch_assoc($result)) {
		              echo "<tr>";
		              echo "<td>".$row['id_book']."</td>";
		              echo "<td>".$row['name_book']."</td>";
		              echo "<td>".$row['author']."</td>";
		              echo "<td>".$row['page_count']."</td>";
		              echo "<td>".$row['category']."</td>";
		              echo "<td>".$row['price']."$</td>";
		              echo "</tr>";
		            }
		          }

		          $connection->close();

        		?>
			</tbody>
		</table>


		<!-- Display by 5, 10 or 15 rows -->
		<div id="display">
			<nav>
			  <ul class="pagination">
			    <li><a href="#">5</a></li>
			    <li><a href="#">10</a></li>
			    <li><a href="#">15</a></li>
			    <li><a href="#">all</a></li>
			  </ul>
			</nav>
		</div>
	</div>

</div>
<!-- modal with some sample info -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            	<!-- here could be a photo of a cover, buttons to update or delete clicked book, etc... -->
                <h1>Information</h1>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>