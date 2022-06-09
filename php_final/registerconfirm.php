<?php
    require("DBconnect.php"); 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname = $_POST["uname"];
        $uaccount = $_POST['uaccount'];
        $upwd = $_POST["upwd"];
        $uemail = $_POST["uemail"];
        $uaddress = $_POST["uaddress"];
        $ubirthday = $_POST["ubirthday"];
        $uphone = $_POST["uphone"]; 

        $check="SELECT * FROM member WHERE uaccount='".$uaccount."'";
        if(mysqli_num_rows(mysqli_query($link,$check))==0){
            $SQL = "INSERT INTO member (uname,uaccount,upwd,uemail,uaddress,ubirthday,uphone) VALUES ('$uname','$uaccount','$upwd','$uemail','$uaddress','$ubirthday','$uphone')";
        
            if(mysqli_query($link,$SQL)){
                echo "<script type='text/javascript'>";
                echo "alert('註冊成功!');";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url = memberzone.php'>";
            }else{
                echo "<script type='text/javascript'>";
                echo "alert('註冊失敗!');";
                echo "</script>";
                echo "<meta http-equiv='Refresh' content='0; url = register.php'>";
            }
        }
        else{
            echo "<script type='text/javascript'>";
            echo "alert('該帳號已有人使用!請重新註冊!');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url = register.php'>";
        }
    }else{
        echo "<script type='text/javascript'>";
            echo "alert('ERROR!!');";
            echo "</script>";
            echo "<meta http-equiv='Refresh' content='0; url = register.php'>";
    }
?>