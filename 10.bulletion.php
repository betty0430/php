<?php
session_start();
if(!$_SESSION["id"]){
echo "請登入"
echo "<meta http-equiv=REFRESH content='2;url=10.login.html'>";
}
else{
    echo "輸入的ID為".$_SESSION["id"]."[<a href=reset_counter.php>logout</a>]<br>";
    error_reporting(0);#不顯示警告  (0)
    //mysqli_connect建立資料庫連結
    //                                      資料庫名稱
        $conn=mysqli_connect("localhost","root","", "mydb");
    //mysqli_query從資料庫查詢資料
    //                         所有欄位
        $result=mysqli_query($conn, "select * from bulletin");
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        //mysqli_fetch_array查詢出來的資料一筆一筆抓出
    while ($row=mysqli_fetch_array($result)){
        //.是字串相加
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