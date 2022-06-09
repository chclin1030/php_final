<?php
  require("DBconnect.php");
  session_start(); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Happy Ticket</title>
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Themefisher Font -->  
  <link href="plugins/themefisher-font/style.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->

<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
      <!-- logo -->
      <a class="navbar-brand" href="admin_user.php">
        <img src="images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
      <li class="nav-item dropdown active dropdown-slide">
      <a class="nav-link" href="admin_user.php">會員管理
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_ticket.php">訂單管理
          <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_contact.php">客服管理
          </a>
        </li>
      </ul>
      <?php
      
      if(isset($_SESSION["uaccount"])){
        echo "<a href='welcome.php' class='ticket'>
        <img src='images/icon/customer.png' alt='ticket'>
        <span>登出</span>
        </a>";
      }else{
        echo "<a href='memberzone.php' class='ticket'>
        <img src='images/icon/customer.png' alt='ticket'>
        <span>登入</span>
        </a>";
      }
    
    ?>
      </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->

<!--===================================
=            Error Section            =
====================================-->


<section class="section error">
	<div class="container">
		<div class="row">
			<div class="col-md-2.5 m-auto">
				<div class="block text-center">
          <h2>會員資訊</h2><br>
            <?php
              $SQL="SELECT * FROM member";

              if($result=mysqli_query($link,$SQL)){
                echo"<table border='4' width='1000' height='250'>";
                echo "<tr><td><h6>會員編號</h6></td><td><h6>會員姓名</h6></td><td><h6>帳號</h6></td><td><h6>密碼</h6></td><td><h6>信箱</h6></td><td><h6>地址</h6></td><td><h6>生日</h6></td><td><h6>手機</h6></tr>";
                while($row=mysqli_fetch_assoc($result)){
                  echo "<tr>";
                  echo "<td>".$row["uNo"]."</td><td>".$row["uname"]."</td><td>".$row["uaccount"]."</td><td>".$row["upwd"]."</td><td>".$row["uemail"]."</td><td>".$row["uaddress"]."</td><td>".$row["ubirthday"]."</td><td>".$row["uphone"]."</td>";
                  echo "</tr>";
                }
              }
                echo "</table>";
            ?>
				</div>
			</div>
		</div>
	</div>
  
</section>

<!--====  End of Error Section  ====-->

<!--============================
=            Footer            =
=============================-->

<footer class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <div class="footer-logo">
              <img src="images/footer-logo.png" alt="logo" class="img-fluid">
            </div>
            <ul class="social-links-footer list-inline">
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-rss"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#"><i class="fa fa-vimeo"></i></a>
              </li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="#">Happy Ticket</a> &#169; 2022 All Right Reserved</p>
        </div>
      </div>
      <div class="col-md-6">
          <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>



  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="plugins/jquery/jquery.js"></script>
  <!-- Popper js -->
  <script src="plugins/popper/popper.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- Smooth Scroll -->
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>  
  <!-- Isotope -->
  <script src="plugins/isotope/mixitup.min.js"></script>  
  <!-- Magnific Popup -->
  <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>  
  <!-- SyoTimer -->
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script type="text/javascript" src="plugins/google-map/gmap.js"></script>
  <!-- Custom Script -->
  <script src="js/custom.js"></script>
</body>

</html>