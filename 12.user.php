<html>
    <head><title>使用者管理</title></head>
    <body>
        <?php
            session_start();
            if(!$_SESSION["id"]){
                echo "請登入";
                echo "<meta http-equiv=REFRESH content='3,url=12.login.html'>"
            }
        else{
            echo "
            <table brorder=1>
            <tr><td>帳號</td><td>密碼</td></tr>
            <h1>使用者管理</h1>
            <a href=12.bulletion .php>回佈告欄列表</a>[<a href=12.user_add_form.php>新增使用者</a>]"

            //mysqli_connect建立資料庫連結
            //                                      資料庫名稱
            $conn=mysqli_connect("localhost","root","", "mydb");
            //mysqli_query從資料庫查詢資料
            //                         所有欄位
            $result=mysqli_query($conn, "select * from bulletin");
            //mysqli_fetch_array查詢出來的資料一筆一筆抓出
        
        
            while ($row=mysqli_fetch_array($result)){
                 //.是字串相加
                //
                echo "<tr><td><a href=12.delete.php?id={$row['id']}>刪除</a>  </td><td>{$row['id']}</td><td>{$row['pwd']}</td><tr>"; 
            }
            echo "</table>";
                    
        }
        ?>
        
    </body>
</html>