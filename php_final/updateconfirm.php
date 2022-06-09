<?php
require("DBconnect.php");
session_start();
$uNo=$_SESSION["uNo"];

$uname=$_POST["uname"];
$uaccount=$_POST["uaccount"];
$upwd=$_POST["upwd"];
$uemail=$_POST["uemail"];
$uaddress=$_POST["uaddress"];
$ubirthday=$_POST["ubirthday"];
$uphone=$_POST["uphone"];

$SQL="UPDATE member SET uNo='$uNo',uname='$uname',uaccount='$uaccount', upwd='$upwd', uemail='$uemail', uaddress='$uaddress', ubirthday='$ubirthday', uphone='$uphone' WHERE uaccount='$uaccount'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('會員資料修改成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=memberprofile.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('會員資料修改失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=update.php'>";
}


?>