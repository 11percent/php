<h2>쿠키로 로그인</h2>

<?php
    if(!isset($_COOKIE["userID"])){
        echo "<a href='cookie_login.php'>로그인</a><br>";
        echo "로그인 후 사용하세요.<br>";
    } else {
        echo "<a href='cookie_logout.php'>로그아웃</a><br>";
        echo "안녕하세요 ".$_COOKIE["userID"]."님<br>";
    }
?>