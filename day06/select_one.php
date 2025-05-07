<?php
$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "select * from friend where num=1";

$result = mysqli_query($conn, $sql);
echo "<table border='1'>";
echo "<tr><th>번호</th><th>이름</th><th>전화번호</th><th>주소</th></tr>";
// $row = mysqli_fetch_assoc($result);
// echo "<tr>";
// echo "<td>" . $row["num"] . "</td>";
// echo "<td>" . $row["name"] . "</td>";
// echo "<td>" . $row["tel"] . "</td>";
// echo "<td>" . $row["address"] . "</td>";
// echo "</tr>";
// echo "</table>";


$row = mysqli_fetch_row($result);
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "</tr>";
echo "</table>";
mysqli_close($conn);
