<html>
    <head><title>新增佈告欄</title></head>
    <body>
        <?php
        //避免程式為登入就進行修改
        error_reporting();
        session_start();
        if(!$_SESSION["id"]){
            echo "請登入"
            echo "<meta http-equiv=REFRESH content='2,url=12.login.html'>";
        }
        else{
            //mysqli_connect建立資料庫連結
            //                                      資料庫名稱
            $conn=mysqli_connect("localhost","root","", "mydb");
            //mysqli_query從資料庫查詢資料
            //                         所有欄位
            $result=mysqli_query($conn, "select * from bulletin where bid={$_GET[bid]}");
            $row=mysqli_fetch_array($result);
            
            $checked1="";
            $checked2="";
            $checked3="";
            if($rom['type']==1){
                $checked1="checked";
            }
            if($rom['type']==2){
                $checked2="checked";
            }
            if($rom['type']==3){
                $checked3="checked";
            }
            //1.寬高各20的輸入方塊
            //2.單一選擇
            //3.可選擇日期
            //4.選擇新增或是清除佈告欄按鈕
            echo"
            <form method=post action=14.bulletin_add.php>
            佈告編號:{$row['bid']}<input type=hidden name=bid value={$row['bid']}<br>
            標題:<input type=text name=title value={$row{'title'}}><br>
            內容:<br><textarea name=content roes=20 clos=20>{$row['contest']}</textarea><br>
            佈告類型:<input type=radio name=type value=1>系上公告
                    <input type=radio name=type value=2>獲獎資訊
                    <input type=radio name=type value=3>徵才資訊<br>
                    
            發布時間:<input type=data name=time value=$row['time']><p></p>
            
            <input type=submit value=新增佈告><input type=reset value=清除>

            ";
        ?>
        </form>
    </body>
</html>