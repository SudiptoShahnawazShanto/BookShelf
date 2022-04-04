<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Admin Panel</title>
      <link rel="icon" type="image/x-icon" href="../icons/books.png">
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
      <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
      <link href="css/main.css" rel="stylesheet" media="all">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <aside class="menu-sidebar d-none d-lg-block" style="background: black">
         <div class="logo">
            <a href="index.php">
            <img src="images/icons/books.png" style="width:60px; position:relative; left:-2px; top:2px;"/>
            </a>
            <a href="index.php">
            <a class="nav-link active" href="index.php"><img src="images/icons/bookshelf.png" width="180px" style="padding-left:5%;"></a>
            </a>
         </div>
         <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
               <ul class="list-unstyled navbar__list">
                  <li class="active has-sub">
                     <a class="js-arrow" href="#">
                        <i></i>
                        <h5>Dashboard</h5>
                     </a>
                  </li>
                  <li>
                     <a href="#cust">
                        <i></i>
                        <h5>Customer Details</h5>
                     </a>
                  </li>
                  <li>
                     <a href="#ord">
                        <i></i>
                        <h5>Order Details</h5>
                     </a>
                  </li>
                  <li>
                     <a href="#pro">
                        <i></i>
                        <h5>Product Details</h5>
                     </a>
                  </li>
                  <li>
                     <a href="#add">
                        <i></i>
                        <h5>Add Product</h5>
                     </a>
                  </li>
                  <li>
                     <a href="#edit">
                        <i></i>
                        <h5>Edit Product</h5>
                     </a>
                  </li>
                  <li>
                     <a href="login.php">
                        <i></i>
                        <h5>Logout</h5>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>
      <div class="page-container" style="background: #fff7e9; padding-top:-80px">
         <div class="main-content">
            <div class="section__content section__content--p30">
               <div class="container-fluid">
                  <h2>Dashboard</h2>
                  </br>
                  <div class="row m-t-25">
                     <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                           <div class="overview__inner">
                              <div class="overview-box clearfix">
                                 <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                 </div>
                                 <div class="text">
                                    <h2>15</h2>
                                    <span>Members</span>
                                 </div>
                              </div>
                              <div class="overview-chart">
                                 <canvas id="widgetChart1"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c2">
                           <div class="overview__inner">
                              <div class="overview-box clearfix">
                                 <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                 </div>
                                 <div class="text">
                                    <h2>20</h2>
                                    <span>Items Sold</span>
                                 </div>
                              </div>
                              <div class="overview-chart">
                                 <canvas id="widgetChart2"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                           <div class="overview__inner">
                              <div class="overview-box clearfix">
                                 <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                 </div>
                                 <div class="text">
                                    <h2>17</h2>
                                    <span>Orders</span>
                                 </div>
                              </div>
                              <div class="overview-chart">
                                 <canvas id="widgetChart3"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c4">
                           <div class="overview__inner">
                              <div class="overview-box clearfix">
                                 <div class="icon">
                                    <i class="zmdi zmdi-chart"></i>
                                 </div>
                                 <div class="text">
                                    <h2>4,800৳</h2>
                                    <span>Earning</span>
                                 </div>
                              </div>
                              <div class="overview-chart">
                                 <canvas id="widgetChart4"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="au-card recent-report">
                           <div>
                              <h3 class="title-2">Recent Reports</h3>
                              <div class="recent-report__chart">
                                 <canvas id="recent-rep-chart"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row" id="cust">
                     <h2>Customer Details</h2>
                     <?php
                        $con = mysqli_connect("localhost","root","","bookshelf");
                        $q="select * from customer;";
                        $res=mysqli_query($con,$q);
                        
                        ?>
                     <table class="table">
                        <tr>
                           <th class="shadow mt-3 mb-2 p-2">Name</th>
                           <th class="shadow mt-3 mb-2 p-2">Email</th>
                           <th class="shadow mt-3 mb-2 p-2">Adress</th>
                           <th class="shadow mt-3 mb-2 p-2">Phone</th>
                        </tr>
                        <?php
                           while($row=mysqli_fetch_row($res)){?>
                        <tr>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[1];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[3];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[4];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[6];?> </td>
                        </tr>
                        <?php } ?>
                     </table>
                  </div>
                  <div class="row" id="ord">
                     <h2>Order Details</h2>
                     <?php
                        $con = mysqli_connect("localhost","root","","bookshelf");
                        $q="select * from payment;";
                        $res=mysqli_query($con,$q);
                        
                        ?>
                     <table class="table"">
                        <tr>
                           <th class="shadow mt-3 mb-2 p-2">Name</th>
                           <th class="shadow mt-3 mb-2 p-2">Phone</th>
                           <th class="shadow mt-3 mb-2 p-2">Confirmation Code</th>
                        </tr>
                        <?php
                           while($row=mysqli_fetch_row($res)){?>
                        <tr>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[11];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> 0<?php 
                              if($row[1]!=0) $val = $row[1];
                              else if($row[3]!=0) $val = $row[3];
                              else if($row[5]!=0) $val = $row[5];
                              else if($row[9]!=0) $val = $row[9];
                              echo $val;
                              ?>
                           </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php 
                              if($row[2]!=0) $val = $row[2];
                              else if($row[4]!=0) $val = $row[4];
                              else if($row[6]!=0) $val = $row[6];
                              else $val="COD";
                              echo $val;
                              ?>
                           </td>
                        </tr>
                        <?php } ?>
                     </table>
                  </div>
                  <div class="row" id="pro">
                     <h2>Product Details</h2>
                     <?php
                        $con = mysqli_connect("localhost","root","","bookshelf");
                        $q="select * from product;";
                        $res=mysqli_query($con,$q);
                        ?>
                     <table class="table">
                        <tr>
                           <th class="shadow mt-3 mb-2 p-2">Name</th>
                           <th class="shadow mt-3 mb-2 p-2">Author</th>
                           <th class="shadow mt-3 mb-2 p-2">Genre</th>
                           <th class="shadow mt-3 mb-2 p-2">Rating</th>
                           <th class="shadow mt-3 mb-2 p-2">Price</th>
                           <th class="shadow mt-3 mb-2 p-2">Details</th>
                           <th class="shadow mt-3 mb-2 p-2">Action</th>
                        </tr>
                        <?php

                        $q="select * from product;";
                        $res=mysqli_query($con,$q);
                        $cnt=0;
                        $id=0;
                        $i=0;
                        $item=array();
                        $item_id=array();



                        ?>   
                        <?php
                           while($row=mysqli_fetch_row($res)){
                              array_push($item_id,$row[0]);
                              $cnt=$cnt+1;
                           ?>
                        <tr>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[1];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[7];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[2];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[3];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[5];?> </td>
                           <td class="shadow mt-3 mb-2 p-2"> <?php echo $row[4];?> </td>
                           <form action="index.php" method="post">
                    	         <td class="shadow mt-3 mb-2 p-2"><input type="submit" value="Remove Product" name="rmv<?php echo $i; $i++;?>" class="form-control btn float-left mb-3" style="background-color:#006FBF; color:white;"></td>
                           </form>
                        </tr>
                        <?php } ?>
                     </table>
                  </div>
                  
                  <?php
                  for($i=0;$i<=$cnt;$i++)
                  {
                        if(isset($_POST['rmv'.$i])){
                           $con=mysqli_connect("localhost","root","","bookshelf");
                           $q="DELETE FROM product WHERE p_id = $item_id[$i];";
                           echo $item_id[$i];
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Product Removed From Bookshelf.')</script>";
                           echo "<script>location.href='index.php'</script>";
                        }
                  } 
                  ?>             



               </div>
            </div>
         </div>
         <div class="container" style="margin-top:50px;">
            <div class="row" id="add">
               <div class="col-md-2"> </div>
               <div class="col-md-8" >
                  <h2 style="text-align: center">Add Product</h2>
                  <form>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label >Name</label>
                           <input type="text" class="form-control" name="nm" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                           <label>Author</label>
                           <input type="text" class="form-control" name="at" placeholder="Author">
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label >Genre</label>
                           <input type="text" class="form-control" name="gr" placeholder="Genre">
                        </div>
                        <div class="form-group col-md-6">
                           <label>Rating</label>
                           <input type="text" class="form-control" name="rat" placeholder="Rating">
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price">
                     </div>
                     <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"  placeholder="Details"></textarea> 
                     </div>
                     <div class="form-group">
                        <label>Image</label> <br>
                        <input type="file" id="" name="img" accept=".jpg, .jpeg, .png">
                     </div>
                     <button type="submit" value="Submit" class="btn btn-primary" name="submit1">Submit</button>
                  </form>
                  <?php
                     if(isset($_GET['submit1'])){
                     $nm=$_GET['nm'];
                     $at=$_GET['at'];
                     $gr=$_GET['gr'];
                     $rat=$_GET['rat'];
                     $price=$_GET['price'];
                     $details=$_GET['details'];
                     $img=$_GET['img'];
                     $q="INSERT INTO `product` (`p_name`, `genre`, `rating`, `review`, `price`, `img`, `author`) values ('$nm','$gr','$rat','$details','$price','$img','$at');";
                     $con = mysqli_connect("localhost","root","","bookshelf");
                     $res=mysqli_query($con,$q);
                      }
                     ?>
               </div>
               <div class="col-md-2"> </div>
            </div>
         </div>
         

         <div class="container" style="margin-top:50px;">
            <div class="row" id="edit">
               <div class="col-md-2"> </div>
               <div class="col-md-8" >
                  <h2 style="text-align: center">Edit Product</h2>
                  
                  <div class="card-block">
                                        <form action="index.php" method="post">
                                        
                                        <div class="form-control">
                                            <input type="text" name="e_nm2" placeholder="Book Title" class="form-control">
                                        </div>
                                       </br>
                                        
                                       <div class="form-control">
                                            <input type="text" name="e_nm" placeholder="New Title" class="form-control">
                                        </div>
                                        <input type="submit" value="Change Book Title" name="b_nm" class="form-control btn btn-dark float-left mb-3"> 

                                        <div class="form-control">
                                            <input type="text" name="e_at" placeholder="New Author" class="form-control">
                                        </div>
                                        <input type="submit" value="Change Author Name" name="b_at" class="form-control btn btn-dark float-left mb-3">  
                                        
                                        <div class="form-control">
                                            <input type="text" name="e_gr"  placeholder="New Genre" class="form-control">
                                        </div>
                                        <input type="submit" value="Change Genre" name="b_gr" class="form-control btn btn-dark float-left mb-3">

                                        <div class="form-control">
                                            <input type="text" name="e_rat"  placeholder="New Rating" class="form-control">
                                        </div>
                                        <input type="submit" value="Change Rating" name="b_rat" class="form-control btn btn-dark float-left mb-3"> 

                                        <div class="form-control">
                                            <input type="text" name="e_price"  placeholder="New Price" class="form-control">
                                        </div>
                                        <input type="submit" value="Change Price" name="b_price" class="form-control btn btn-dark float-left mb-3"> 

                                        <div class="form-control">
                                            <input class="form-control" type="text" name="e_details"  placeholder="New Details">
                                        </div>
                                        <input type="submit" value="Change Details" name="b_details" class="form-control btn btn-dark float-left mb-3"> 

                                        <div class="form-control">
                                          <label>New Image</label> <br>
                                          <input type="file" id="" name="e_img" accept=".jpg, .jpeg, .png">
                                       </div>
                                    </form>
                  
                  
                  <?php
                     if(isset($_POST['b_nm'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_nm=$_POST['e_nm'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET p_name='$e_nm' WHERE p_name ='$e_nm2' ;";
                            $res=mysqli_query($con,$q);
                            echo "<script>alert('Title Changed')</script>";
                            echo "<script>location.href='index.php'</script>";
                     }

                    if(isset($_POST['b_at'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_at=$_POST['e_at'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET author='$e_at' WHERE p_name ='$e_nm2' ;";
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Author Name Changed')</script>";
                           echo "<script>location.href='index.php'</script>";
                     }


                     if(isset($_POST['b_gr'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_gr=$_POST['e_gr'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET genre='$e_gr' WHERE p_name ='$e_nm2' ;";
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Genre Changed')</script>";
                           echo "<script>location.href='index.php'</script>";
                     }

                     if(isset($_POST['b_rat'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_rat=$_POST['e_rat'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET rating='$e_rat' WHERE p_name ='$e_nm2' ;";
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Rating Changed')</script>";
                           echo "<script>location.href='index.php'</script>";
                     }

                     if(isset($_POST['b_price'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_price=$_POST['e_price'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET price='$e_price' WHERE p_name ='$e_nm2' ;";
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Price Changed')</script>";
                           echo "<script>location.href='index.php'</script>";
                     }

                     if(isset($_POST['b_details'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_details=$_POST['e_details'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET review='$e_details' WHERE p_name ='$e_nm2' ;";
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Details Changed')</script>";
                           echo "<script>location.href='index.php'</script>";
                     }

                     if(isset($_POST['e_img'])){
                        $con=mysqli_connect("localhost","root","","bookshelf");
                        $e_img=$_POST['e_img'];
                        $e_nm2=$_POST['e_nm2'];
                        $q="UPDATE product SET img='$e_img' WHERE p_name ='$e_nm2' ;";
                           $res=mysqli_query($con,$q);
                           echo "<script>alert('Image Changed')</script>";
                           echo "<script>location.href='index.php'</script>";
                     }
                     ?>
               </div>
               <div class="col-md-2"> </div>
            </div>
         </div>               


         <?php
                
                if(isset($_POST['bpass'])){
                    $con=mysqli_connect("localhost","root","","bookshelf");
                    $n=$_POST['ppass'];
                    $np=$_POST['npass'];
                    if($P==$n){
                        $q="UPDATE customer SET pass='$np' WHERE name ='$uname' ;";
                        $res=mysqli_query($con,$q);
                        echo "<script>alert('Password has been updated.')</script>";
                        echo "<script>location.href='customer.php'</script>";
                    }
                    else{
                        echo "<script>alert('Enter previous password correctly.')</script>";
                    }
                }
                else if(isset($_POST['bemail'])){
                    $con=mysqli_connect("localhost","root","","bookshelf");
                    $n=$_POST['email'];
                    $q="UPDATE customer SET email = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('Email has been updated.')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                else if(isset($_POST['baddr'])){
                    $con=mysqli_connect("localhost","root","","bookshelf");
                    $n=$_POST['addr'];
                    $q="UPDATE customer SET addr = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('Address has been updated.')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                else if(isset($_POST['bphn'])){
                    $con=mysqli_connect("localhost","root","","bookshelf");
                    $n=$_POST['phn'];
                    $q="UPDATE customer SET phone = '$n' WHERE id = $id;";
                    $res=mysqli_query($con,$q);
                    echo "<script>alert('Phone number has been updated.')</script>";
                    echo "<script>location.href='customer.php'</script>";
                }
                
            ?>            








         
      </div>
      <div style = "padding: 20px 0; margin-top: 55px; background-color: #202020; padding-bottom: 20px;">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-6">
                     <span style="color:white">Copyright © 2022</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <script src="vendor/jquery-3.2.1.min.js"></script>
      <script src="vendor/chartjs/Chart.bundle.min.js"></script>
      <script src="js/main.js"></script>
   </body>
</html>