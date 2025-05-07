<?php
session_start(); // 세션 시작
if(!isset($_SESSION["userName"])){
    echo "<a href='session.php'>로그인</a><br>";
    echo "로그인 후 사용하세요.<br>";
} else {
    echo "<a href='session_logout.php'>로그아웃</a><br>";
    echo "안녕하세요 ".$_SESSION["userName"]."님<br>";
}

?>