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
    echo "<colgroup>";
    echo "<col style='width: 10%;'>";
    echo "<col style='width: 20%;'>";
    echo "<col style='width: 45%;'>";
    echo "<col style='width: 25%;'>";
    echo "</colgroup>";
    echo "<tr align='center'><th>번호</th><th>이름</th><th>제목</th><th>날짜</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td align='center'>" . ($row["num"]) . "</td>";
        echo "<td align='center'>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td align='center'><a href='view.php?num=" . $row["num"] . "' style='color:white;'>" . htmlspecialchars($row["subject"]) . "</a></td>";
        echo "<td align='center'>" . date("m-d H:i", strtotime($row["regdate"])) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "조회 실패: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>

<div class="my-5 text-center">
    <a href="insert.php" class="btn btn-dark">Write</a>
</div>



<?php
include "include/footer.php";
?>