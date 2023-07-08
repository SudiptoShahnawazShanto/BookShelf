<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="icons/books.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css">
</head>


<body style="background-image: url('img/login3.jpg'); background-position:center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-0" id="top">
      <div class="container-fluid">
        <ul class="navbar-nav">
          <a class="navbar-brand" href="home.php" style="padding-left:7.5%;">
            <img src="icons/books.png" alt="Avatar Logo" style="width:55px;" class="rounded-pill"> 
          </a>
          <li class="nav-item">
            <a class="nav-link active" href="home.php"><img src="icons/bookshelf.png" width="160px" height="50px"></a>
          </li>
        </ul>
        
      </div>
    </nav>

  <div class="container" id="container" style="margin-top:5%; position:center; align-items: center;">
      
      <div class="form-container sign-in-container">
        <form method="POST" action="signup.php" class="form" id="login">
          <h1 class="form__title">Sign Up</h1>
          <div class="form__input-group">
            <input type="text" class="form__input" name="uname" id="username" maxlength="20" placeholder="Enter your username" required> 
          </div>
          <div class="form__input-group">
            <input type="text" class="form__input" name="email" id="email" maxlength="100" placeholder="Enter your email" required> 
          </div>
          <div class="form__input-group">
            <input type="password" class="form__input" name="pswd" id="pass" maxlength="20"  placeholder="Enter your password" required> 
          </div>
          <div class="form__input-group">
            <input type="text" class="form__input" name="phn" id="phn" maxlength="20" placeholder="Enter phone number" required> 
          </div>
          <div class="form__input-group"> 
            <input type="text" class="form__input" name="addr" id="addr" maxlength="20" placeholder="Enter your address" required> 
          </div>
          <div class="form__input-group">
            <button type="submit" class="form__button" name="submit" style="margin-top:10px; margin-bottom:10px">Sign Up</button>
          </div>
      </form>
      </div>
      
  
      
    <div class="overlay-container">
          <div class="overlay">
              <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>Please login with your account info</p>
                  <button class="ghost" id="signIn">Sign In</button>
              </div>
              <div class="overlay-panel overlay-right">
                  <h1>Hello!</h1>
                  <p>Enter the required information and start journey with us.</p>
              </div>
          </div>
      </div>
  </div>

  <?php

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      require('PHPMailer/Exception.php');
      require('PHPMailer/SMTP.php');
      require('PHPMailer/PHPMailer.php');

      

      if(isset($_POST["submit"])){
          $uname=$_POST["uname"];
          $email=$_POST["email"];

          $phn=$_POST["phn"];
          $addr=$_POST["addr"];
          $cart=0;
          $pass=$_POST["pswd"];
          $con = mysqli_connect("localhost","root","","bookshelf");
          $query="insert into customer (name,email,addr,phone,pass) values('$uname','$email','$addr','$phn','$pass'); ";
          $res=mysqli_query($con,$query);



                          $mail = new PHPMailer(true);

                          try {
                              $mail->isSMTP();                                            
                              $mail->Host       = 'smtp.gmail.com';                     
                              $mail->SMTPAuth   = true;                                  
                              $mail->Username   = 'bookshelfprojectju@gmail.com';                     
                              $mail->Password   = 'BookShelf1!';                              
                              $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                              $mail->Port       = 465;                                    



                              $mail->setFrom('bookshelfprojectju@gmail.com', 'BookShelf');
                              $mail->addAddress($email, $uname);

                              
                              $mail->isHTML(true);                                
                              $mail->Subject = 'Your account has been registered!';
                              $mail->Body    = 'Congratulations! You have successfully registered to Bookshelf!</b>';

                              $mail->send();

                          } catch (Exception $e) {
                              echo "<script>alert('Please enter a valid email.')</script>";
                          }

          

          if($res){
              echo "<script>alert('You have been registered successfully!')</script>";

              echo "<script>window.open('login.php','_self')</script>";
          }

      }


  ?>
    
</body>
</html>
