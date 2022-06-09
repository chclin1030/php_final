<?php

require("DBconnect.php");
$tNo = $_GET["tNo"];

$SQL = "DELETE FROM ticket WHERE tNo='$tNo'";
//mysqli_query($link,$SQL);
if(mysqli_query($link,$SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('刪除成功');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url = ticketcheck.php'>";
    //header('Location: list.php');
}else{
    echo "<script type='text/javascript'>";
    echo "alert('刪除失敗');";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url = ticketcheck.php'>";
}

?>