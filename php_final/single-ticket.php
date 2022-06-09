<?php
	require("DBconnect.php");
	session_start(); 
	$pNo=$_GET["pNo"];
	$SQL = "SELECT * FROM performance WHERE pNo = '$pNo'";

	if($result = mysqli_query($link,$SQL)){
		while($row = mysqli_fetch_assoc($result)){
      $pNo = $row["pNo"];
			$pName = $row["pName"];
			$pCategory = $row["pCategory"];
			$pDate = $row["pDate"];
			$pTime = $row["pTime"];
			$pPrice = $row["pPrice"];
			$pLocation = $row["pLocation"];
			$pDescription = $row["pDescription"];
			$pPhoto = $row["pPhoto"];
		}
	}
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
					<h3>活動資訊</h3>
				</div>
        <ol class="breadcrumb p-0 m-0">
				  <li class="breadcrumb-item"><a href="index.php">首頁</a></li>
				  <li class="breadcrumb-item active">活動資訊</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->

<?php
echo "<section class='section single-speaker'>
	<div class='container'>
		<div class='block'>
			<div class='row'>
				<div class='col-lg-5 col-md-6 align-self-md-center'>
					<div class='image-block'>
						<img src='images/ticket/".$pPhoto."' class='img-fluid' alt='speaker'>
					</div>
				</div>
				<div class='col-lg-7 col-md-6 align-self-center'>
					<div class='content-block'>
						<div class='name'>
							<h3>$pName</h3>
						</div>
						<div class='details'>
							<p><h3>						
							<ul>
							<li><b>活動名稱： $pName</b></li>
							<li><b>活動日期： $pDate</b></li>
							<li><b>活動地點： $pLocation</b></li>
							<li><b>活動時間： $pTime</b></li>
							<li><b>票價： $$pPrice</b></li>
							</ul></h3></p>	
							<p><b>
								$pDescription</b>
              <br>
							</p>
						</div>
            <a href='buying.php?pNo=".$pNo."' class='btn btn-main-md'>立即購票</a>
					</div>
				</div>
			</div>
		</div>
		<div class='block-2'>
			<div class='row'>
				<div class='col-md-12'>
					<div class='personal-info'>
          <p><h6>【注意事項】</h6>
						

            未滿12歲兒童不可獨自入場，需成人持票陪同入場。<br>
            
            <br>主辦單位不主動提供寄物服務，嬰兒車及大型行李需配合工作人員指示置放展場外，主辦單位不負責個人之財物損失，請妥善保管好隨身物品及貴重物品。<br>
            
            <br>進入展場內背包請一律往前背，避免碰撞展品。建議攜帶輕便隨身行李前往展覽會場。<br>
            
            <br>展場內無設置洗手間與垃圾桶，請先至松山文創園區內使用廁所後，再行入場參觀。<br>
            
            <br>請遵守參觀動線、展場規則及現場工作人員指示，如遇人潮眾多，敬請依序排隊等候。<br>
            
            <br>全展區禁止錄影，拍照時禁止使用閃光燈、腳架及自拍棒等輔助器材，請遵守展覽各區規定，尊重展覽之智慧財產權及作品版權所有。<br>
            
            <br>展場內禁止嬉戲、奔跑與飲食，請勿攜帶食物或飲料入場；禁止吸菸、嚼食口香糖及檳榔；禁止於展場現場兜售、轉賣票券；如有不當行為經規勸無效者，則須立即離場且不得有異議，恕不補償或退還門票費用。<br>
            
            <br>展場內不可攜帶寵物（導盲犬除外）、長柄雨傘及各式危險物品與違禁品入場；展場內禁止拍打、觸碰展品及展櫃，如有損壞事宜，需照價賠償。<br>
            
            <br>展場內皆有定點工作人員維護場內秩序，如發現任何可疑人物或不明物體、撿到遺失物品、或身體感到不適，請立即通知附近的工作人員尋求協助。<br>
            
            <br>離場後如需再次進場，可於展場出口處蓋印重複入場章，並重新於入口排隊入場，惟僅限當日展覽營業時間內進出展覽。前往紀念品區購買商品不須另外購票，請從出口處前往紀念品區。<br>
            
            <br>為維護觀展品質及安全，展場參觀人數達上限時，將進行人流管制，售票處將暫停售票，敬請配合工作人員指示，於入口處依序等候入場 (最終入場時間17:30)。<br>
            
            <br>展覽營業時間及規定若有所異動，請依現場或官方粉絲團公告為準，上述事項若有未盡事宜，主辦單位保留活動之解釋權利。<br>
            </p>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>";

?>

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