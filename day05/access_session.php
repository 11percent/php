<?php
    session_start(); // 세션 시작
    if(isset($_SESSION["userName"])){
        echo $_SESSION["userName"]."님 반갑습니다.<br>";
    }
    else{
        echo "세션에 저장된 값이 없습니다.<br>";
    }

?>