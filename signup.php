<?php
	$title = "User SignUp";
	require_once "./template/header.php";
?>
<h4 class="text-center text-primary mt-5 font-weight-bold"> Sign Up Form</h4>
	<form class="form-row" method="post" action="user_signup.php">
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Firstname</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Firstname" name="firstname" required>
    </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Lastname</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Lastname" name="lastname" required>
    </div>
    <div class="form-group col-md-6">

        <label for="inputEmail4">Email</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
    </div>
    <div class="form-group col-md-12">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="" name="address" required>
    </div>
    <div class="form-group">
        <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" required>
        </div>
     </div>
     <div class="form-group">
        <div class="form-group col-md-6">
        <label for="inputZip">Postal Code</label>
        <input type="text" class="form-control" id="inputZip" name="zipcode" required>
        </div>
    </div>
    <div>
        
    </div>
   


    <div class="form-group col-md-12">
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<div style="position:fixed; bottom:120px">

<?php



    $fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullurl,"signup=empty")==true){
        echo '<p style="color:red">You did not fill in all the fields.</p>';
        exit();
    }
    if(strpos($fullurl,"signup=invalidemail")==true){

      echo '<p style="color:red">You did not enter a valid email address.</p>';
        exit();
    }
?>
</div>

<br>
<br>
<br>
<?php
	require_once "./template/footer.php";
?>