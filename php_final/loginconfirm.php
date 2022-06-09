<?php
  require("DBconnect.php");

  if(isset($_POST["uaccount"])){
    if($_POST["uaccount"] != null){
      $uaccount=$_POST["uaccount"];
      $upwd=$_POST["upwd"];

      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $SQL="SELECT * FROM member WHERE uaccount='$uaccount' AND upwd = '$upwd'";
        $SQL_admin="SELECT * FROM member WHERE uaccount='$uaccount' AND upwd = '$upwd' AND uaccount = 'admin'";
        $result=mysqli_query($link,$SQL);
        $row=mysqli_fetch_assoc($result);
        $result_admin=mysqli_query($link,$SQL_admin);
        $row_admin=mysqli_fetch_assoc($result_admin);
        
        if(mysqli_num_rows($result_admin)==1){
          session_start();
          $_SESSION["loggedin"] = true;
          $_SESSION["uNo"] = $row["uNo"];
          $_SESSION["uname"] = $row["uname"];
          $_SESSION["uaccount"] = $row["uaccount"];
          $_SESSION["upwd"] = $row["upwd"];
          $_SESSION["uaddress"] = $row["uaddress"];
          $_SESSION["uemail"] = $row["uemail"];
          $_SESSION["ubirthday"] = $row["ubirthday"];
          $_SESSION["uphone"] = $row["uphone"];

          echo "<script type='text/javascript'>";
          echo "alert('登入成功!');";
          echo "</script>";
          echo "<meta http-equiv='Refresh' content='0; url = admin_user.php'>";
        }

        else if(mysqli_num_rows($result)==1){
          session_start();
          $_SESSION["loggedin"] = true;
          $_SESSION["uNo"] = $row["uNo"];
          $_SESSION["uname"] = $row["uname"];
          $_SESSION["uaccount"] = $row["uaccount"];
          $_SESSION["upwd"] = $row["upwd"];
          $_SESSION["uaddress"] = $row["uaddress"];
          $_SESSION["uemail"] = $row["uemail"];
          $_SESSION["ubirthday"] = $row["ubirthday"];
          $_SESSION["uphone"] = $row["uphone"];


          echo "<script type='text/javascript'>";
          echo "alert('登入成功!');";
          echo "</script>";
          echo "<meta http-equiv='Refresh' content='0; url = welcome.php'>";

        }else{
          echo "<script type='text/javascript'>";
          echo "alert('帳號或密碼錯誤!')";
          echo "</script>";
          echo "<meta http-equiv='Refresh' content='0; url=login.php'>";
        }

      }
    }
  }
  
?>