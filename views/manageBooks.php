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
            <li class="active"><a href="#">All books</a></li>
            <li><a href="./createBook.php">Create book</a></li>
            <li><a href="./updateBook.php">Update book</a></li>
            <li><a href="./deleteBook.php">Delete book</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div id="box">

  <h1>All books listed</h1>
  <table class="table table-hover">
      <thead>
        <tr>
          <td>id_book</td>
          <td>name_book</td>
          <td>author</td>
          <td>page_count</td>
          <td>category</td>
          <td>price</td>
        </tr>
      </thead>
      <tbody>
        <?php
          
          $books = "SELECT * FROM books ORDER BY name_book";
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
              echo "<td>".$row['price']."</td>";
              echo "</tr>";
            }
          }

          $connection->close();

        ?>
      </tbody>
    </table>

  <div id="display">
    <nav>
      <ul class="pagination">
       
        <li><a href="#">5</a></li>
        <li><a href="#">10</a></li>
        <li><a href="#">15</a></li>
         
      </ul>
    </nav>
  </div>

</div>



</body>
</html>