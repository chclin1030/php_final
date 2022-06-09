<?php
require("DBconnect.php");

$tNo=$_POST["tNo"];
$tNum=$_POST["ticketnum"];

$SQL="SELECT * FROM ticket WHERE tNo='$tNo'";

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
        $pNo=$row['pNo'];
        $pName=$row['pName'];
        $pDate=$row['pDate'];
        $pTime=$row['pTime'];
        $uaccount=$row['uaccount'];
        $tDate=$row['tDate'];
        $tKey=$row['tKey'];
    }
}

$SQL="UPDATE ticket SET tNo='$tNo', pNo='$pNo',pName='$pName', pDate='$pDate', pTime='$pTime', tNum='$tNum',uaccount='$uaccount', tDate='$tDate', tKey='$tKey' WHERE tNo='$tNo'";

if(mysqli_query($link, $SQL)){
    echo "<script type='text/javascript'>";
    echo "alert('訂單修改成功')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=ticketcheck.php'>";
}else{
    echo "<script type='text/javascript'>";
    echo "alert('訂單修改失敗')";
    echo "</script>";
    echo "<meta http-equiv='Refresh' content='0; url=ticketcheck.php'>";
}


?>