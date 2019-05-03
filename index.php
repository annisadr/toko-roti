<?php
  //menyambungkan koneksi
  include 'config/koneksi.php';

  session_start();

  $id       = session_id();
  

  if(isset($_GET['page'])) $page = $_GET['page'];
    else $page = 'index';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Abe's Bakers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <center><img src="gambar/logologo.png" width="400px"></center>
    <p>Be Health! Be Happy!</p>
  </div>
</div>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php?page=index">Home</a></li>
        <li><a href="index.php?page=product">Product</a></li>
        <li><a href="index.php?page=aboutus">About Us</a></li>
        <li><a href="index.php?page=faq">FAQ</a></li>
        <li><a href="index.php?page=contactus">Contact Us</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          if(isset($_SESSION['id'])){
            include 'logout.php';
          }
          else{
            include 'login.php';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <?php
       if ($page=='index')
        include ('awal.php');
       elseif ($page=='product')
        include ('product.php');
       elseif ($page=='aboutus')
        include ('aboutus.php');
       elseif ($page=='faq')
        include ('faq.php');
       elseif ($page=='contactus')
        include ('contactus.php');
       elseif ($page=='bread')
        include ('bread.php');
       elseif ($page=='cake')
        include ('cake.php');
       elseif ($page=='rbread')
        include ('rbread.php');
       elseif ($page=='pastry')
        include ('pastry.php');
       elseif ($page=='pbread')
        include ('pbread.php');
      else if($page=="signup")
        include ('form_signup.php');
      else if($page=="deskripsirb11")
        include ('deskripsirb11.php');
      else if($page=="biodatabeli")
        include ('biodatabeli.php');
      else if($page=="dps4")
        include ('deskripsipastry4.php');
      else if($page=="dpanb2")
        include ('deskripsipanb2.php');
      else if($page=="fpemesanan")
        include ('form_pemesanan.php');
      else if($page=="chekout")
        include ('checkout.php');
      else if($page=="vkomen")
        include ('view_komentar.php');
    ?>

  </div>
</div>
<br>

<footer class="container-fluid text-left">
  <p class="text-center">Copyright &copy 2017 | Annisa Dwi Rosalina</p>
      <div class="col-sm-4">
        <h4>Metode Pembayaran</h4>
        <img src="gambar/bni.png" width="80" height="30">
        <img src="gambar/visa.png" width="65" height="25">
        <img src="gambar/bri.png" width="50" height="38"><br><br><br>


        <h4>Jasa Pengiriman</h4>
        <img src="gambar/gosend.png" width="80">
      </div>

  <div class="col-sm-4"><br><br><br><br><br>
    <form class="form-inline">
    <input type="email" class="form-control" size="30" placeholder="Search">
      <button type="button" class="btn btn-info">
        <span class="glyphicon glyphicon-search"></span> Search
      </button>
    </form>
  </div>
    
      <div class="col-sm-4">
        <h4>Follow us</h4>
        <img src="gambar/lgfb.png" width="50">
        <img src="gambar/lgt.png" width="50">
        <img src="gambar/lgig.png" width="50">
      </div><br>

</footer>

</body>
</html>
