<?php
  require("DBconnect.php");
  session_start();
  $tNum = $_POST["ticketnum"];
  $pNo = $_POST["pNo"];
  $today = date('Y/m/d H:i:s');

  function random_string($length = 32, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
	if (!is_int($length) || $length < 0) {
		return false;
	}
	$characters_length = strlen($characters) - 1;
	$string = '';

	for ($i = 0; $i < $length; $i++) {
		$string .= $characters[mt_rand(0, $characters_length)];
	}
	return $string;
    }
    $tKey = random_string(8);


  if(isset($_SESSION["uaccount"])){
    $uaccount = $_SESSION["uaccount"];
    $performance_take = "SELECT * FROM performance WHERE pNo = '$pNo'";
    $result=mysqli_query($link,$performance_take);
    $row=mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)==1){
        $pName = $row["pName"];
        $pDate = $row["pDate"];
        $pTime = $row["pTime"];
    }
    $SQL = "INSERT INTO ticket (pNo,pName,pDate,pTime,tNum,uaccount,tDate,tKey) VALUES ('$pNo','$pName','$pDate','$pTime','$tNum','$uaccount','$today','$tKey')";
    if(mysqli_query($link,$SQL)){
        echo "<script type='text/javascript'>";
        echo "alert('訂票成功!');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = ticketcheck.php'>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert('訂票失敗!');";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url = index.php'>";
    }
  }else{
    echo "<script type='text/javascript'>";
    echo "alert('請先登入再購票!謝謝!');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url = memberzone.php'>";
  }

?>