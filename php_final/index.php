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
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown active dropdown-slide">
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

<!--============================
=            Banner            =
=============================-->

<section class="news section">
	<div class="container">
		<div class="row-10">
			<div class="col-12">
			</div>
		</div>
	</div>
</section>

<?php
echo "<section class='speakers-full-width'>
	<div class='container-fluid p-0'>
		<div class='row'>
			<div class='col-12'>
				<div class='speaker-slider'>";
					
						
						$SQL = "SELECT * FROM performance ORDER BY RAND() LIMIT 10";
						if($result = mysqli_query($link,$SQL)){
							while( $row = mysqli_fetch_assoc($result)){
								$pNo= $row["pNo"];
								$name = $row["pName"];
								$photo = $row["pPhoto"];
								$date = $row["pDate"];

								echo 
									"<div class='speaker-image'>
									
									<img src='images/ticket/".$photo."' alt='speaker' class='img-fluid'>
									
									<a href = 'single-ticket.php?pNo=".$pNo."'><div class='primary-overlay text-center'>
										<h5>$name</h5>
										<p>$date</p>
									</div></a>
								</div>";
							}
						}
				echo "</div>
			</div>
		</div>
	</div>
</section>";
?>

<!--====  End of Banner  ====-->

<!--================================
=               News               =
=================================-->

<section class="sponsors section  overlay-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3><span class="alternate">最新消息</span></h3>
					<p><h6>精彩的節目不要錯過!!!就在HappyTicket!!!</h6></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of News  ====-->

<!--================================
=                Posts             =
=================================-->

<section class="news section">
	<div class="container">
		<div class="row mt-30">

			<?php	
				
				$SQL = "SELECT * FROM performance ORDER BY RAND() LIMIT 9";
				if($result = mysqli_query($link,$SQL)){
					while( $row = mysqli_fetch_assoc($result)){
              			$pNo = $row["pNo"];
						$name = $row["pName"];
						$photo = $row["pPhoto"];
						$date = $row["pDate"];
						$start_month = $row["pStart_month"];
						$start_day = $row["pStart_day"];

						echo "<div class='col-lg-4 col-md-6 col-sm-8 col-10 m-auto'>
								<div class='blog-post'>
								<div class='post-thumb'>
									
								<a href = 'single-ticket.php?pNo=".$pNo."'>
								<img src ='images/ticket/".$photo."' alt='post-imag' class='img-fluid'>
								</a>
								
								</div>
								<div class='post-content'>
									<div class='date'>
										<h4>$start_day<span>$start_month</span></h4>
									</div>
									<div class='post-title'>
										<h2><a href='single-ticket.php?pNo=".$pNo."'>$name</a></h2>
									</div>
									<div class='post-meta'>
                      					時間：$date
									</div>
								</div>
							</div>
						</div>";
					}
				}
			?>

			<div class="col-12 text-center">
				<!-- Pagination -->
				<nav class="d-flex justify-content-center">
				  <ul class="pagination">
				  	<li class="page-item">
				      <a class="page-link" href="exhibition.php" aria-label="prev">
				        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
				        <span class="sr-only">prev</span>
				      </a>
				    </li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item">
				      <a class="page-link" href="exhibition.php" aria-label="Next">
				        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</section>


<!--====  End of News Posts  ====-->

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



