<?php
  require("DBconnect.php");

  if($_POST["uemail"] != null && $_POST["uaccount"] != null){
      $uemail=$_POST["uemail"];
      $uaccount=$_POST["uaccount"];

      $SQL="SELECT * FROM member WHERE uemail = '$uemail' AND uaccount='$uaccount'";
      $result=mysqli_query($link,$SQL);
      $row=mysqli_fetch_assoc($result);

      if(mysqli_num_rows($result)==1){
        $upwd = $row["upwd"];
        echo "<script type='text/javascript'>";
        echo "alert('您的密碼為：$upwd')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
      }else{
        echo "<script type='text/javascript'>";
        echo "alert('查無此資料!')";
        echo "</script>";
        echo "<meta http-equiv='Refresh' content='0; url=secretforgot.php'>";
      }
    }

?>