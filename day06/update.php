<?php
$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "update friend set name= '또치' where num=1;";
if ($result = mysqli_query($conn, $sql)) {
    echo "update 성공<br>";
} else {
    echo "update 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
