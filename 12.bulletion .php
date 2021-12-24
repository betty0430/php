<?php
session_start();
if(!$_SESSION["id"]){
    echo "請登入"
    echo "<meta http-equiv=REFRESH content='3,url=12.login.html'>";
}
else{
    echo "輸入的ID為".$_SESSION["id"]."[<a href=9.reset_counter.php>登入</a>][<a href=12.user.php>使用者管理</a>][<a href=14.bulletin_add_form.php>新增使用者</a>]<br>";
    error_reporting(0);#不顯示警告  (0)
    //mysqli_connect建立資料庫連結
    //                                      資料庫名稱
        $conn=mysqli_connect("localhost","root","", "mydb");
    //mysqli_query從資料庫查詢資料
    //                         所有欄位
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td></td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        //mysqli_fetch_array查詢出來的資料一筆一筆抓出
    while ($row=mysqli_fetch_array($result)){
        //.是字串相加
        //<a href=bulletin_edit_form.php?bid={row["bid"]}>修改</a>
        //超連結到某程式 修改
        echo "<tr><td><a href=15.bulletin_edit_form.php?bid={row["bid"]}>修改</a>
        <a href=bulletin_delete.php?bid={row["bid"]}>刪除</a> </td><td>";
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
}
?>