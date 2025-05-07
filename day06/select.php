<?php
$servername = "localhost";
$username = "KANG";
$password = "1234";
$db = "sample";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("연결 오류 : " . mysqli_connect_error());
}
$sql = "select * from friend";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<table border='1'>";
    echo "<tr><th>번호</th><th>이름</th><th>전화번호</th><th>주소</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["num"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["tel"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "조회 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
