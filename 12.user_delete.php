<?php
        session_start();
        if(!$_SESSION["id"]){
            echo "請登入";
            echo "<meta http-equiv=REFRESH content='3,url=12.login.html'>"
        }
        else{
            #mysqli_connect() 建立資料庫連結
            $conn=mysqli_connect("localhost","root","","mydb");
            $sql:"delete form user where id='{$_GET[id]}'";
            if(!mysqli_query($conn,$sql)){
                echo "刪除失敗";
            }else{
                echo"刪除成功";
            }
            echo"<meta http-equiv=REFRESH contevt='3,url=user.php";
        }
?>
        