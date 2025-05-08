<?php
include "include/header.php";
require_once "include/db.php";

$num = isset($_GET["num"]) ? intval($_GET["num"]) : 0;

if ($num > 0) {
    $sql = "SELECT * FROM board WHERE num = $num";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
        <h2 class="my-5">게시글 보기</h2>
        <table class="table table table-dark table-striped">
            <colgroup>
                <col style="width: 25%;">
                <col style="width: 75%;">
            </colgroup>
            <tr>
                <th>번호</th>
                <td><?= $row["num"] ?></td>
            </tr>
            <tr>
                <th>이름</th>
                <td><?= htmlspecialchars($row["name"]) ?></td>
            </tr>
            <tr>
                <th>제목</th>
                <td><?= htmlspecialchars($row["subject"]) ?></td>
            </tr>
            <tr>
                <th>내용</th>
                <td><?= nl2br(htmlspecialchars($row["content"])) ?></td>
            </tr>
            <tr>
                <th>등록일</th>
                <td><?= $row["regdate"] ?></td>
            </tr>
        </table>
        <a href="list.php" class="btn btn-secondary mt-3">목록으로</a>
        <a href="update_process.php?num=<?= $row["num"] ?>" class="btn btn-primary mt-3">수정</a>
        <a href="delete_form.php?num=<?= $row["num"] ?>" class="btn btn-danger mt-3">삭제</a>
<?php
    } else {
        echo "<p>해당 게시글을 찾을 수 없습니다.</p>";
    }
} else {
    echo "<p>잘못된 접근입니다.</p>";
}

mysqli_close($conn);
include "include/footer.php";
?>