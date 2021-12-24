<?php
//新增使用者

//mysqli_connect建立資料庫連結
//                                      資料庫名稱
$conn=mysqli_connect("localhost","root","","mydb");

#mysqli_query()從資料庫查詢資料
#新增資料sql命令:insert into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
$sql="insert into user (id,pwd) values('{$_POST['id']}','{$_POST['pwd']}')";


#判斷資料否有放入
#資料放入
if(mysqli_query($conn,$sql)){
    echo"新增指令錯誤"
}else{
    echo"新增資料成功,三秒後回到網頁"
    echo "<meta http-equiv=REFRESH cotent='3,url=12.bulletion .php>"
}
?>