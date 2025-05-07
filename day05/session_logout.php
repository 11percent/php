<?php
session_start(); // 세션 시작
if(isset($_SESSION["userName"])){
    unset($_SESSION["userName"]); // 세션 변수 삭제
    echo "로그아웃 되었습니다.<br>";
    echo "<script>location.href='session_login.php';</script>";
} else {
    echo "<script>alert('로그인 후 사용하세요.');</script>";
    echo "<script>location.href='session_login.php';</script>";
}
?>