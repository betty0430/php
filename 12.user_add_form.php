<html>
    <head><title>新增使用者</title>></head>
    <body>
    <!--避免未登入就新增使用者-->
    <?php
    error_reporting();
    session_start();
    if(!$_SESSION["id"]){
    echo "請登入"
    echo "<meta http-equiv=REFRESH content='2,url=12.login.html'>";
    }
    else{
        
        //<!--get  不顯示密碼 post 顯示密碼-->
        echo "
        <form action=12.user_add.php method=post>
            <!--可以輸入兩個-->
            帳號:<input type=text name=id><br>
            密碼:<input type=text name=pwd><p></p>            
            <!--兩個BUTTEN-->
            <input type=submit value=新增><input type=reset value=清除>
        </form>
        ";
    }
    ?>

    </body>
</html>