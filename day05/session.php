<?php
session_start(); // 세션 시작
// 세션에 값 저장   
$_SESSION["userName"] = "장성호";
echo "세션에 값이 저장되었습니다.<br>";
echo "세션에 저장된 값은 ".$_SESSION["userName"]."입니다.<br>";
echo "세션 ID는 ".session_id()."입니다.<br>";
echo "<a href='session_page.php'>세션 페이지로 이동</a><br>";

?>