<?php
    //避免程式為登入就進行修改
    error_reporting();
    session_start();
    if(!$_SESSION["id"]){
        echo "請登入"
        echo "<meta http-equiv=REFRESH content='2,url=12.login.html'>";
    }
    else{
        $conn=mysqli_connect("localhost","root",,"mydb");
        //判斷是否修改成功
        if (!mysqli_query($conn, "update bullention set title='{$_post['title]}',$content='{$_POST['content']}',
        time={$_POST['time']},type={$_POST['type']} where id='{$_post['id']}'")) {
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH cotent='12.bulletion.php>'";
        }
        else{
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH cotent='12.bulletion.php>'";
        }
    }
?>