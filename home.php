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
    <title>Bookshelf</title>
    <link rel="icon" type="image/x-icon" href="icons/books.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
</head>

<body style="background:#A8A8FF;">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-0" id="top" style="background:#7878FF;">
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

          


    <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>
  
  <!--Slideshow-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hd3.jpg" alt="" class="d-block h-50" style="width:100%">
      <div class="carousel-caption">
        <h3 style="font-family: 'PT Sans Narrow', sans-serif;">Welcome to Bookshelf</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hd1.jpg" alt="" class="d-block h-50" style="width:100% ">
      <div class="carousel-caption">
        <h3 style="font-family: 'PT Sans Narrow', sans-serif; color:black;">Welcome to Bookshelf</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hd2.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3 style=" font-family: 'PT Sans Narrow', sans-serif; color:black;">Welcome to Bookshelf</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hd4.jpg" alt="" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3 style=" font-family: 'PT Sans Narrow', sans-serif;">Welcome to Bookshelf</h3>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<?php
  $con=mysqli_connect("localhost","root","","bookshelf");

  $bname=array();
  $bprice=array();
  $bimg=array();
  $brating=array();
  $bauthor=array();
  $bgenre=array();

  if(isset($_POST['search']))
  {
    $search;
    $search=$_POST["p_name"];
    $con=mysqli_connect('localhost','root','','bookshelf');
    $query="select * from product where p_name='$search' OR genre='$search' OR author like '%$search';";
    $res=mysqli_query($con,$query);
    
    
    while($row=mysqli_fetch_row($res))
    {
      $id=$row[0];
      $name=$row[1];
      $price=$row[5];
      $image=$row[6];
      $rating=$row[3];
      $author=$row[7];
      $review=$row[4];
      $genre=$row[2];
       
      ?>
      <div class="container" style="border: 3px solid #006FBF; background: #9898FF; margin-top:30px; margin-bottom:30px;">
        <div class="col">
        <div class="card shadow p-2" style="width: 400px; margin-left:30%; background: #C8C8FF;" >
                  <img style="height: 450px;" class="card-img-top" src="img/books/<?php echo $image ?>" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $name ?> </h4>
                    <h5 class="card-text"><?php echo $author ?> </h5>
                    <p class="card-text"> Genre: <?php echo $genre ?></p>
                    <p class="card-text"> Rating: <?php echo $rating ?> &nbsp;|&nbsp; Price: <?php echo $price ?> </p>
                    <form action="home.php" method="post"> <button class="btn" type="submit" name="<?php echo $id ?>"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
                    <h4>Details: </h4>
                    <p><?php echo $review ?></p>
                  </div>
          </div>
        </div>
      </div>
      
      <?php
    
    }

  }
  
  
    $q="select * from product";
    $tab=mysqli_query($con,$q);
    while($row=mysqli_fetch_row($tab)){
      array_push($bname,$row[1]);
      array_push($brating,$row[3]);
      array_push($bprice,$row[5]);
      array_push($bimg,$row[6]);
      array_push($bauthor,$row[7]);
      array_push($bgenre,$row[2]);
    }
  
  
  
?>
     <div style="background: #9898FF; width:1420px; margin-left: auto; margin-right: auto;">
        <div class="row">
          
          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[0] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[0] ?> </h5>
                <p class="card-text"><?php echo $bauthor[0] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[0] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[0] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[0] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="1"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[1] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[1] ?> </h5>
                <p class="card-text"><?php echo $bauthor[1] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[1] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[1] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[1] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="2"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[2] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[2] ?> </h5>
                <p class="card-text"><?php echo $bauthor[2] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[2] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[2] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[2] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="3"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[3] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[3] ?> </h5>
                <p class="card-text"><?php echo $bauthor[3] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[3] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[3] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[3] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="4"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[4] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[4] ?> </h5>
                <p class="card-text"><?php echo $bauthor[4] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[4] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[4] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[4] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="5"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[5] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[5] ?> </h5>
                <p class="card-text"><?php echo $bauthor[5] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[5] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[5] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[5] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="6"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[6] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[6] ?> </h5>
                <p class="card-text"><?php echo $bauthor[6] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[6] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[6] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[6] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="7"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[7] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[7] ?> </h5>
                <p class="card-text"><?php echo $bauthor[7] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[7] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[7] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[7] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="8"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[8] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[8] ?> </h5>
                <p class="card-text"><?php echo $bauthor[8] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[8] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[8] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[8] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="9"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[9] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[9] ?> </h5>
                <p class="card-text"><?php echo $bauthor[9] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[9] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[9] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[9] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="10"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[10] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[10] ?> </h5>
                <p class="card-text"><?php echo $bauthor[10] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[10] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[10] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[10] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="11"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[11] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[11] ?> </h5>
                <p class="card-text"><?php echo $bauthor[11] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[11] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[11] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[11] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="12"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[12] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[12] ?> </h5>
                <p class="card-text"><?php echo $bauthor[12] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[12] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[12] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[12] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="13"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[13] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[13] ?> </h5>
                <p class="card-text"><?php echo $bauthor[13] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[13] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[13] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[13] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="14"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[14] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[14] ?> </h5>
                <p class="card-text"><?php echo $bauthor[14] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[14] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[14] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[14] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="15"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>

              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[15] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[15] ?> </h5>
                <p class="card-text"><?php echo $bauthor[15] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[15] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[015] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[15] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="16"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[16] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[16] ?> </h5>
                <p class="card-text"><?php echo $bauthor[16] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[16] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[16] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[16] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="17"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[17] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[17] ?> </h5>
                <p class="card-text"><?php echo $bauthor[17] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[17] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[17] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[17] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="18"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[18] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[18] ?> </h5>
                <p class="card-text"><?php echo $bauthor[18] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[18] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[18] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[18] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="19"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[19] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[19] ?> </h5>
                <p class="card-text"><?php echo $bauthor[19] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[19] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[19] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[19] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="20"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[20] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[20] ?> </h5>
                <p class="card-text"><?php echo $bauthor[20] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[20] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[20] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[20] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="21"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[21] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[21] ?> </h5>
                <p class="card-text"><?php echo $bauthor[21] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[21] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[21] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[21] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="22"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[22] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[22] ?> </h5>
                <p class="card-text"><?php echo $bauthor[22] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[22] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[22] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[22] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="23"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[23] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[23] ?> </h5>
                <p class="card-text"><?php echo $bauthor[23] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[23] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[23] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[23] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="24"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[24] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[24] ?> </h5>
                <p class="card-text"><?php echo $bauthor[24] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[24] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[24] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[24] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="25"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[25] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[25] ?> </h5>
                <p class="card-text"><?php echo $bauthor[25] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[25] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[25] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[25] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="26"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[26] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[26] ?> </h5>
                <p class="card-text"><?php echo $bauthor[26] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[26] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[26] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[26] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="27"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[27] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[27] ?> </h5>
                <p class="card-text"><?php echo $bauthor[27] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[27] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[27] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[27] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="28"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[28] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[28] ?> </h5>
                <p class="card-text"><?php echo $bauthor[28] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[28] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[28] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[28] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="29"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[29] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[29] ?> </h5>
                <p class="card-text"><?php echo $bauthor[29] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[29] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[29] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[29] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="30"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[30] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[30] ?> </h5>
                <p class="card-text"><?php echo $bauthor[30] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[30] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[30] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[29] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="31"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow mt-3 mb-2 mx-3 p-2" style="width: 300px; background: #C8C8FF;"  >
              <img class="card-img-top" src="img/books/<?php echo $bimg[31] ?>" alt="Card image cap" height="400px" width="150px">
              <div class="card-body">
                <h5 class="card-title"><?php echo $bname[31] ?> </h5>
                <p class="card-text"><?php echo $bauthor[31] ?> </p>
                <p class="card-text"> Genre: <?php echo $bgenre[31] ?></p>
                <p class="card-text"> Rating: <?php echo $brating[31] ?> &nbsp;|&nbsp; Price: <?php echo $bprice[29] ?> </p>
                <form action="home.php" method="post"> <button class="btn" type="submit" name="32"> <img src="icons/cart.png" alt="" height=40px width=40px></button></form>
              </div>
            </div>
          </div>
          </div>
        </div>
    




<?php
   $con=mysqli_connect("localhost","root","","bookshelf");

   $q1="select id from customer where name='$user';";
   $r1=mysqli_query($con,$q1);
   $u_id=0;
   while($row=mysqli_fetch_row($r1)){
      $u_id=$row[0];
   }

   for($i=1;$i<=51;$i++)
        {
            if(isset($_POST[$i])){
                $q="INSERT INTO cart (c_id, cart, user) VALUES (NULL, $i,$u_id);";
                $r=mysqli_query($con,$q);
                echo "<script>alert('Product Added to Cart.')</script>";
                echo "<script>location.href='home.php'</script>";
                break;
            }
        }
?>



<footer id="dk-footer" class="dk-footer mt-5" style="padding-top:150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="home.php" class="footer-logo">
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
        
    
    
    
</body>
</html>
