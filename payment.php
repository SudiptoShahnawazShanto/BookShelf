<?php
    session_start();
    $user=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" type="image/x-icon" href="icons/books.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="payment.css">
</head>

<body style="background:#A8A8FF;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-0" id="top">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <a class="navbar-brand" href="home.php">
                <img src="icons/books.png" alt="Avatar Logo" style="width:55px;" class="rounded-pill"> 
            </a>
            <li class="nav-item">
                <a class="nav-link active" href="home.php"><img src="icons/bookshelf.png" width="160px" height="50px"></a>
            </li>
            </ul>
            <div style="float:right;">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="login.php"><img src="icons/login.png" width="52px" height="50px"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="customer.php"><img src="icons/user2.png" width="50px" height="50px"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cart.php"><img src="icons/cart.png" width="52px" height="47px"> </a>
                </li>
                <li>
                <form class="d-flex" action="home.php" method="post" style="margin-top:15px; margin-left:10px;">
                <input class="form-control me-2" type="text" name="p_name" placeholder="Search Books" style="width: 200px">
                <button class="btn" type="submit" name="search" style="background-color:#006FBF; color:white;">Search</button>
                </form> 
                </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card p-3" style="background:#D8D8FF;">
                <p class="mb-0 fw-bold h4">bKash/Rocket/Nagad Number: 01521-xxxxxx</p>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card p-3" style="background:#D8D8FF;">
                <p class="mb-0 fw-bold h4">Payment Methods</p>
            </div>
        </div>
        <div class="col-12">
            <div class="card p-3" style="background:#D8D8FF;">


                <div class="card-body border p-0" style="background:#A8A8FF;">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">bKash</span></a> </p>
                    <div class="collapse p-3 show pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Payment</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">  
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="bmail"> <label for="" class="form__label">Your Email</label> </div>
                                        </div>                                      
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="bnum"> <label for="" class="form__label">bKash Phone Number</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="bpin"> <label for="" class="form__label">Transaction ID</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" value="Submit" name="bsub" class="btn btn-primary w-100">
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card-body border p-0" style="background:#A8A8FF;">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Nagad</span></a> </p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Payment</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="nmail"> <label for="" class="form__label">Your Email</label> </div>
                                        </div>  
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="nnum"> <label for="" class="form__label">Nagad Phone Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="npin"> <label for="" class="form__label">Transaction ID</label> </div>
                                        </div>
                                        <div class="col-12">
                                        <input type="submit" value="Submit" name="nsub" class="btn btn-primary w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body border p-0" style="background:#A8A8FF;">
                    <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Rocket</span></a> </p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Confirm Payment</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="rmail"> <label for="" class="form__label">Your Email</label> </div>
                                        </div>  
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="rnum"> <label for="" class="form__label">Rocket Phone Number</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="rpin"> <label for="" class="form__label">Transaction ID</label> </div>
                                        </div>
                                        <div class="col-12">
                                        <input type="submit" value="Submit" name="rsub" class="btn btn-primary w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card-body border p-0" style="background:#A8A8FF;">
                    <p> <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Cash on Delivery</span></a> </p>
                    <div class="collapse p-3 pt-0" id="collapseExample">
                        <div class="row">
                            <div class="col-lg-5 mb-lg-0 mb-3">
                                <p class="h4 mb-0">Shipping Info</p>
                            </div>
                            <div class="col-lg-7">
                                <form action="payment.php" class="form" method="post">
                                    <div class="row">                        
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="cmail"> <label for="" class="form__label">Your Email</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="nam"> <label for="" class="form__label">Name</label> </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="cnum"> <label for="" class="form__label">Contact Number</label> </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form__div"> <input type="text" class="form-control" placeholder=" " name="addr"> <label for="" class="form__label">Shipping Address</label> </div>
                                        </div>     
                                        <div class="col-12">
                                        <input type="submit" value="Submit" name="csub" class="btn btn-primary w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        
    </div>
</div>
<?php
    $q="select * from customer where name='$user'";
    $con=mysqli_connect("localhost","root","","bookshelf");
    $res=mysqli_query($con,$q);
    $id=0;
    while($row=mysqli_fetch_row($res)){
        $id=$row[0];
    }
    if(isset($_POST['bsub'])){
        $bk=$_POST["bnum"];
        $pass=$_POST["bpin"];
        $q="insert into payment (bkash,bpin,user,uname) values($bk,'$pass',$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull! Check your email.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }
    if(isset($_POST['nsub'])){
        $bk=$_POST["nnum"];
        $pass=$_POST["npin"];
        $q="insert into payment (nagad,npin,user,uname) values($bk,;$pass;,$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull! Check your email.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }
    if(isset($_POST['rsub'])){
        $bk=$_POST["rnum"];
        $pass=$_POST["rpin"];
        $q="insert into payment (rocket,rpin,user,uname) values($bk,;$pass;,$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull! Check your email.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }
    if(isset($_POST['csub'])){
        $bk=$_POST["cnum"];
        $name=$_POST["nam"];
        $addr=$_POST["addr"];
        $q="insert into payment (c_name,c_addr,c_num,user,uname) values('$name','$addr',$bk,$id,'$user'); ";
        $res=mysqli_query($con,$q);
        $query="delete  from cart where user=$id";
        $res=mysqli_query($con,$query);
       
        echo "<script>alert('Payment Successfull! Check your email.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
        

    }
?>

<footer id="dk-footer" class="dk-footer mt-5" style="padding-top:150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="icons/read.png" alt="footer_logo" class="img-fluid">
                        </a>
                        <div class="footer-social-link">
                            <h3>Follow Us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>

                </div>
                
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Bookshelf</h3>
                                    <p>4580 Road Avenue</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>01521240405</h3>
                                    <p>Give Us A Call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                </ul>
                              </div>
                        </div>
                       
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3> All Rights Reserved by Bookshelf</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <h3><a href="home.php" style="color:blue;">Logout</a></h3>
                               
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2022</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
          <a href="#top">
          <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>


          </a>
            
        </div>
        <!-- End Back to top -->
        
</footer>  

<?php

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;

      require('PHPMailer/Exception.php');
      require('PHPMailer/SMTP.php');
      require('PHPMailer/PHPMailer.php');

      

      if(isset($_POST["bsub"])){
          $email=$_POST["bmail"];

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
                              $mail->addAddress($email);
                              
                              $mail->addAttachment('books/The Adventures of Huckleberry Finn.pdf');
                              
                              $mail->isHTML(true);                                
                              $mail->Subject = 'Your Order Has Been Confirmed!';
                              $mail->Body    = 'Congratulations! Your order has been confirmed. Here is a copy of your book.</b>';

                              $mail->send();

                          } catch (Exception $e) {
                              echo "<script>alert('Confirmation Failed.')</script>";
                          }

      }

      if(isset($_POST["nsub"])){
        $email=$_POST["nmail"];

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
                            $mail->addAddress($email);

                            $mail->addAttachment('books/The Adventures of Huckleberry Finn.pdf');

                            
                            $mail->isHTML(true);                                
                            $mail->Subject = 'Your Order Has Been Confirmed!';
                            $mail->Body    = 'Congratulations! Your order has been confirmed. Here is a copy of your book.</b>';

                            $mail->send();

                        } catch (Exception $e) {
                            echo "<script>alert('Confirmation Failed.')</script>";
                        }

    }

    if(isset($_POST["rsub"])){
        $email=$_POST["rmail"];

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
                            $mail->addAddress($email);

                            $mail->addAttachment('books/The Adventures of Huckleberry Finn.pdf');
                            
                            $mail->isHTML(true);                                
                            $mail->Subject = 'Your Order Has Been Confirmed!';
                            $mail->Body    = 'Congratulations! Your order has been confirmed. Here is a copy of your book.</b>';

                            $mail->send();

                        } catch (Exception $e) {
                            echo "<script>alert('Confirmation Failed.')</script>";
                        }

    }

    if(isset($_POST["csub"])){
        $email=$_POST["cmail"];

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
                            $mail->addAddress($email);

                            $mail->addAttachment('books/The Adventures of Huckleberry Finn.pdf');

                            
                            $mail->isHTML(true);                                
                            $mail->Subject = 'Your Order Has Been Confirmed!';
                            $mail->Body    = 'Congratulations! Your order has been confirmed. Here is a copy of your book.</b>';

                            $mail->send();

                        } catch (Exception $e) {
                            echo "<script>alert('Confirmation Failed.')</script>";
                        }

    }


  ?>

</body>
</html>