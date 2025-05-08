<?php
include "include/header.php";
require_once "include/db.php";
?>
<?php

$mode = "";
$num = "";
$error = "";

if (isset($_GET["mode"])) {
    $mode = $_GET["mode"];
}
if (isset($_GET["num"])) {
    $num = $_GET["num"];
}
if (isset($_GET["error"])) {
    $error = $_GET["error"];
}
?>
<?php

$num = isset($_GET["num"]) ? intval($_GET["num"]) : 0;

if ($num > 0) {
    $sql = "SELECT * FROM board WHERE num = $num";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
        <h2 class="my-5">게시글 수정</h2>

        <form action="update.php" method="post">
            <table class="table table-dark table-striped">
                <colgroup>
                    <col style="width: 25%;">
                    <col style="width: 75%;">
                </colgroup>
                <tr>
                    <th>이름</th>
                    <td><input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" class="form-control"></td>
                </tr>
                <tr>
                    <th>제목</th>
                    <td><input type="text" name="subject" value="<?= htmlspecialchars($row['subject']) ?>" class="form-control"></td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td><textarea name="content" rows="5" class="form-control"><?= htmlspecialchars($row['content']) ?></textarea></td>
                </tr>

                <tr>
                    <th>비밀번호</th>
                    <td><input type="password" name="password" class="form-control" required></td>
                </tr>
            </table>

            <input type="hidden" name="num" value="<?= $row['num'] ?>">

            <div class="mt-3">
                <button type="submit" class="btn btn-success">수정하기</button>
                <a href="list.php" class="btn btn-secondary">목록으로</a>
                <a href="view.php?num=<?= $row["num"] ?>" class="btn btn-danger">취소</a>
            </div>
            <?php
            if ($error == "y") {
                echo "<p class='alert'>비밀번호 확인해 주세요.</p>";
            }
            ?>
        </form>
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