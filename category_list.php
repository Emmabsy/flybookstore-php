<?php
	session_start();
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM category ORDER BY category_name";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty category ! Something wrong! check again";
		exit;
	}

	$title = "List Of Categories";
	require "./template/header.php";
?>
	<p class="lead text-center">Book Categories</p>
	<ul class="list-group" >
	<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT categoryid FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($pubInBook = mysqli_fetch_assoc($result2)){
				if($pubInBook['categoryid'] == $row['categoryid']){
					$count++;
				}
			}
	?>
		<li class="list-group-item list-group-item-success">
			<!--<span class="badge"><?php /*echo $count; */?></span> -->
		    <a href="bookPerCat.php?catid=<?php echo $row['categoryid']; ?>"> <?php echo $row['category_name']; ?> </a>
		</li>
		
	<?php } ?>
	</br> 
	<a class="btn btn-primary" href= "books.php" role="button"> Click for more books</a>

	
	</ul>
<?php
	mysqli_close($conn);
	require "./template/footer.php";
?>