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
  <script type="text/javascript" src="../script.js"></script>

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
            <li class="active"><a href="#">All books</a></li>
            <li><a href="./createBook.php">Create book</a></li>
            <li><a href="./updateBook.php">Update book</a></li>
            <li><a href="./deleteBook.php">Delete book</a></li>
          </ul>
        </div>
      </div>
    </nav>

<div id="box">

  <h1>All books listed</h1>
  <input id="searchInput" placeholder=" Search ...">
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
          
          $books = "SELECT * FROM books ORDER BY id_book";
          $result = mysqli_query($connection, $books);

          if($connection->connect_errno!=0) {
            echo "Error:".$connection->connect_errno;
          } else {


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

<!-- modal with some sample info -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              <!-- here could be a photo of a cover, buttons to update or delete clicked book, etc... -->
                <h1>About this book</h1>
                <p>Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo.</p>
            <div class="modal-footer">
              <form action="./createBook.php">
                <input type="submit" class="btn btn-primary" value="Add">
              </form>
              <form action="./updateBook.php">
                <input type="submit" class="btn btn-success" value="Update">
              </form>
                <form action="./deleteBook.php">
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    <!-- back button sending back to the main page index.php -->
  <div id="container">
    <a class="btn btn-default backbutton" href="../index.php" role="button">Go to catalog</a>
  </div>
</div>

</body>
</html>