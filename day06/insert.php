<?php
$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "insert into friend(name,tel,address) values(
        '변덕규','010-5555-6666','서울시 강남구 역삼동');";
$sql .= "insert into friend(name,tel,address) values(
        '채치수','010-2222-2222','서울시 강남구 역삼동');";
$sql .= "insert into friend(name,tel,address) values(
        '강백호','010-3333-4444','서울시 강남구 역삼동');";

$result = mysqli_multi_query($conn, $sql);
if ($result) {
    echo "insert 성공<br>";
} else {
    echo "insert 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
