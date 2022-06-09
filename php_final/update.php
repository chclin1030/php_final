<?php

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
      <a class="navbar-brand" href="memberzone.php">
        <img src="images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
      <li class="nav-item">
          <a class="nav-link" href="index.php">首頁
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="exhibition.php">展覽
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entertainment.php">休閒娛樂
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="course.php">課程講座
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="online.php">線上活動
		  <span>/</span>
          </a>
        </li>
		<li class="nav-item dropdown dropdown-slide">
          <a class="nav-link">會員中心
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
          <a class="dropdown-item" href="memberprofile.php">會員資料</a>
            <a class="dropdown-item" href="ticketcheck.php">訂單查詢</a>
            <a class="dropdown-item" href="contactus.php">客服中心</a>
          </div>
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



<!--================================
=            Page Title            =
=================================-->

<section class="page-title bg-title overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="title">
					<h3>會員資料修改</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="memberzone.php">首頁</a></li>
				  <li class="breadcrumb-item active">會員資料修改</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<?php
  require("DBconnect.php");
  $uNo = $_GET["uNo"];
  $SQL="SELECT * FROM member WHERE uNo='$uNo'";

  if($result=mysqli_query($link,$SQL)){
      while($row=mysqli_fetch_assoc($result)){
          $uname=$row["uname"];
          $uaccount=$row['uaccount'];
          $upwd=$row['upwd'];
          $uemail=$row['uemail'];
          $uaddress=$row['uaddress'];
          $ubirthday=$row['ubirthday'];
          $uphone=$row['uphone'];
      }
  }

?>

<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
			
        <form action="updateconfirm.php" method="post" class="row">
        <input type="hidden" name = "uNo" value='<?php echo $uNo;?>'>
          <div class="col-md-12">
            姓名：<input type="text" name="uname" id="uname" class="form-control main"  value='<?php echo $uname;?>'>
          </div>
          <div class="col-md-12">
            帳號：<input type="text" class="form-control main" name="uaccount" value='<?php echo $uaccount;?>'>
          </div>
          <div class="col-md-12">
            密碼：<input type="password" class="form-control main" name="upwd" value='<?php echo $upwd;?>'>
          </div>
          <div class="col-md-12">
            信箱：<input type="email" class="form-control main" name="uemail" id="uemail" value='<?php echo $uemail;?>'>
          </div>
          <div class="col-md-12">
            收件地址：<input type="text" class="form-control main" name="uaddress" id="uaddress" value='<?php echo $uaddress;?>'>
          </div>
          <div class="col-md-6">
            生日：<input type="date" class="form-control main" name="ubirthday" value='<?php echo $ubirthday;?>'>
          </div>
          <div class="col-md-6">
            手機：<input type="text" name="uphone" id="uphone" class="form-control main" value='<?php echo $uphone;?>'>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-main-md">修改完成</button>
          </div>
        </form>
      </div>
    </div>
	</div>
</section>

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