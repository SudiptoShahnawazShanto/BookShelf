<?php
    session_start();
    $con = mysqli_connect("localhost","root","","bookshelf");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icons/books.png">
    <title>Admin login</title>
    <link rel="stylesheet" href="css/login.css">

</head>
<body style="background-image: url('images/login.jpg'); background-position:center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

  <div class="container" id="container">
    <!-- sign in page -->
    <div class="form-container sign-in-container">
      <form method="POST" action="login.php" class="form" id="login">
        <h1 class="form__title"> Admin Login</h1>
        <div class="form__input-group">
          <label for="username">Username: </label>
          <input type="text" class="form__input" name="uname" id="username" maxlength="100" required> 
        </div>
        <div class="form__input-group">
          <label for="pass">Password: </label>
          <input type="password" class="form__input" name="pass" id="pass" maxlength="100" required> 
        </div>
        <div class="form__input-group">
          <button type="submit" class="form__button" name="submit">Login</button>
        </div>
     </form>
    </div>
    
   <!--  create account page -->
   <div class="form-container sign-up-container">
     <form method="POST" action="login.php" class="form" id="register">
       <h1 class="form__title">Register</h1>
       <div class="form__input-group">
         <label for="username"> Username: </label>
         <input type="text" class="form__input" name="uname" id="username" maxlength="100" required>
       </div>
        <div class="form__input-group">
          <label for="pass">Password: </label>
          <input type="password" class="form__input" name="pass" id="pass" maxlength="100" required> 
        </div>
       <button class="form__button" type="submit" name="submit">Login</button>
     </form>
   </div> 
    
   <div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>Login and manage the Bookshelf database.</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
                  <h1>Hello!</h1>
                  <p>Login and manage the Bookshelf database.</p>
              </div>
		</div>
	</div>
 </div>
 <?php
    if(isset($_POST['submit'])){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $q="select * from admin where username='$uname' and pass='$pass';";
        $res=mysqli_query($con,$q);
        
        $row=mysqli_fetch_array($res);
        if(is_array($row)){
            $_SESSION['uname']=$row['username'];
            $_SESSION['pass']=$row['pass'];
            echo "<script>location.href='index.php'</script>";
        }else{
            echo "<script>alert('Invalid username or password.')</script>";
        }

    }
?>

  
  <script src="js/login.js"></script>
  
</body>
</body>
</html>