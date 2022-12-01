<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?> 
     
     <br/> 
     <!--margin:5% auto; -->
     <h2 style="text-align:center">Welcome to your 21st century bookstore</h2>   
        <p style="text-align:center">Buy or rent used, and hard-to-find books online</p>  
      <h3 class="text-center text-primary mt-5 font-weight-bold">Our Latest Books</h3>
      <br><br>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-2">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>