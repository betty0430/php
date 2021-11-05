<?php
//密碼判斷
if(($_POST["id"]=="123")&&($_POST["pwd"]=="123")){
      session_start();
      $_SESSION["id"]=$_POST["id"];
      echo "Welcom";
      echo "<meta http-equiv=REFRESH content='2; url=10.bulletion.php'>";
}
else{
      echo "Login failure";
      echo "<meta http-equiv=REFRESH content='2; url=10.login.html'>";
}
?>