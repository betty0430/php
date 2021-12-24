<html>
    <head><title>修改使用者</title></head>
    <body>
        <?php
            //避免程式為登入就進行修改
            error_reporting();
            session_start();
            if(!$_SESSION["id"]){
                echo "請登入"
                echo "<meta http-equiv=REFRESH content='2,url=12.login.html'>";
                //過2秒後跳回12.login.html
            }
            else{
                //連結資料庫
                $conn=mysqli_connect("localhost","root",,"mydb");
                $result=mysqli_query($conn,"select * from user where id='{$_GET[id]}'");
                $row=myqli_fetch_arry($result);
                //hidden 隱藏
                echo"
                    <form method=post action=user_edit.php>
                        <input type=hidden name=id value={$row[id]}>
                        帳號:$row[id]<br>
                        密碼:<input type=text name=pwd value={$row[pwd]}><p></p>
                        <input type=submit value=修改>
                    </form>
                ";
            }
        ?>
    </body>
</html>