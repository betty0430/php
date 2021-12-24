<?php
    //避免程式為登入就進行修改
    error_reporting();
    session_start();
    if(!$_SESSION["id"]){
        echo "請登入"
        echo "<meta http-equiv=REFRESH content='2,url=12.login.html'>";
    }
    else{
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="insert into bulletin(title,content,type,time)
        values('{$_POST['title']}','{$_POST['content']}',{$_POST['type']},'{$_POST['time']}')";
        //判斷是否修改成功
        if (!mysqli_query($conn,$sql) {
            echo "新增命令錯誤";
            echo "<meta http-equiv=REFRESH cotent='3,url=12.user.php>'";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH cotent='3,url=12.bulletin.php>'";
        }
    }
?>