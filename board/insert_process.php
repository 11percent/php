<?php

$name = $_POST["name"];
$password = $_POST["password"];
$subject = $_POST["subject"];
$content = $_POST["content"];

$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "insert into board(num,name,password,subject,content,regdate) values(null,'$name','$password','$subject','$content',now());";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "테이블 생성 성공<br>";
    echo "$name" . "<br>";
    echo "$password" . "<br>";
    echo "$subject" . "<br>";
    echo "$content" . "<br>";
    echo "등록일: " . date("Y-m-d H:i:s") . "<br>";
} else {
    echo "테이블 생성 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);

echo "<script>location.href='list.php';</script>";
?>
<!DOCTYPE html>