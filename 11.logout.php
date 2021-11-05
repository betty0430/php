<?php
    session_start();
    unset($_SESSION["id"]);
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='2; url=10.login.html'>";
?>