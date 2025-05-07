<?php

$user_name = $_POST["userName"];
$address = $_POST["address"];
$tel = $_POST["tel"];

$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "insert into friend(num,name,tel,address) values(null,'$user_name','$tel','$address');";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "테이블 생성 성공<br>";
} else {
    echo "테이블 생성 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
