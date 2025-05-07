<?php
$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "delete from friend where num=1;";
if ($result = mysqli_query($conn, $sql)) {
    echo "delete 성공<br>";
} else {
    echo "delete 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
