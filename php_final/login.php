<?php 
    session_start(); 
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
      header("location: welcome.php");
      exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  
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
      <a class="navbar-brand" href="index.php">
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
          <a class="nav-link" href="#">會員中心
          </a>
          <!-- Dropdown list -->
          <div class="dropdown-menu">
            <a class="dropdown-item" href="memberprofile.php">會員資料</a>
            <a class="dropdown-item" href="ticketcheck.php">訂單查詢</a>
            <a class="dropdown-item" href="contactus.php">客服中心</a>
          </div>
        </li>
      </ul>
      <a href="login.php" class="ticket">
        <img src="images/icon/customer.png" alt="ticket">
        <span>登入</span>
      </a>
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
					<h3>會員登入</h3>
				</div>
				<ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
				  <li class="breadcrumb-item active">會員登入</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<section class="section contact-form">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>會員登入</h3>
				</div>
			</div>
		</div>
  
		<form action="loginconfirm.php" method="post" class="row">
			<div class="col-md-12">
				帳號：<input type="text" class="form-control main" name="uaccount" id="uaccount" placeholder="請輸入您的帳號" required="required">
			</div>
			<div class="col-md-12">
				密碼：<input type="password" class="form-control main" name="upwd" id="upwd" placeholder="請輸入您的密碼" required="required">
                <a href="secretforgot.php">忘記密碼</a>
			</div>
			<div class="col-12 text-center">
				<input type="submit"  value="登入" class="btn btn-main-md" >
        <input type="submit"  value="立即註冊" class="btn btn-main-md" onclick="location.href='register.php'">    
			</div>
		</form>
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