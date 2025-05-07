<?php
include "include/header.php";
?>


<h2 class="my-5">리스트</h2>

<?php

require_once "include/db.php";

$sql = "select * from board;";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<table border='2' class='table table-dark table-striped-columns'>";
    echo "<tr><th>번호</th><th>이름</th><th>제목</th><th>내용</th><th>날짜</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . ($row["num"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["subject"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["content"]) . "</td>";
        echo "<td>" . ($row["regdate"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "조회 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>



<?php
include "include/footer.php";
?>