<?php
    if(!isset($_COOKIE["username"])){
        echo "쿠키가 없습니다.<br>";
    } else {
        echo $_COOKIE["username"]."님 반갑습니다.<br>";
    }
    setcookie("username", "kim", time()+60);
    echo "쿠키가 설정되었습니다.<br>";

?>