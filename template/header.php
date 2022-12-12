<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require_once "./functions/database_functions.php";
    if(isset($_SESSION['email'])){
      $customer = getCustomerIdbyEmail($_SESSION['email']);
      $name=$customer['firstname'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="./bootstrap/css/footer.css">
    
  </head>

  <body>

    <nav class="navbar navbar-dark navbar-fixed-top" style="background-color:rgb(59,155,152)"  >
      <div class="container" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div style="width: 400px; " >
          <div class="row">
            <a style="color:#ffffff;font-weight:900 " class="navbar-brand" href="index.php" col-md-3>FLIXBOOKZ</a>
            <form  method="post" action="search_book.php" class="col-md-6" style="margin-top:7px">
              <input type="text" class="form-control" id="inputPassword2" placeholder="Search By Keyword" name="text">
              <button type="submit" class="btn btn-primary mb-2" style="display:none"></button>
           </form>
          </div>
          </div>
        </div>


        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav navbar-right">

              <li><a style="color:#ffffff; background-color:transparent;font-weight:600 " href="books.php"><span class="fa fa-book" aria-hidden="true"></span>&nbsp; Books</a></li>
              
              <li ><a style="color:#ffffff; background-color:transparent; font-weight:600 " href="category_list.php"><span class="glyphicon glyphicon-list-alt" ></span>&nbsp; Categories</a></li>

              <li><a style="color:#ffffff; background-color:transparent;font-weight:600 " href="publisher_list.php"><span class="fa fa-newspaper-o" aria-hidden="true"> </span>&nbsp; Publishers</a></li>
              
              

              <li ><a style="color:#ffffff; background-color:transparent;font-weight:600 " href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; Cart</a></li>
              <!--<li> <a style="color:#ffffff; background-color:transparent; font-weight:600 " href="contact.php"><span class="fa fa-book" aria-hidden="true"></span>&nbsp; Contact Us</a></li>

  -->




              <?php
               if(isset($_SESSION['user'])){
                 echo ' <li><a style="color:#ffffff; background-color:transparent; font-weight:600 "    href="logout.php"><span class="	glyphicon glyphicon-log-out"></span>&nbsp; LogOut</a></li>' . '<li><a  style="color:#ffffff; background-color:transparent; font-weight:600" href="profile.php"><span class="fa fa-user-circle-o" aria-hidden="true"></span>&nbsp;'
                 .$name.
                 '</a></li>';
               }else{
                echo ' <li><a  style="color:#ffffff; background-color:transparent; font-weight:600 "  href="signin.php"><span class="	glyphicon glyphicon-log-in"></span>&nbsp; Signin</a></li>' . '<li><a  style="color:#ffffff; background-color:transparent; font-weight:600 " href="signup.php"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Sign up</a></li>';
               }

              ?>
              
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>

      <div >  
        	<img src="./images/bk4.jpg" style="width: 1260px; height: 450px;">

    </div>
    <?php } ?>

    <div class="container" id="main">