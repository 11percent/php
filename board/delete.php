<?php
include "include/header.php";
require_once "include/db.php";

$num = isset($_GET['num']) ? intval($_GET['num']) : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT password FROM board WHERE num = $num";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $db_password = $row['password'];

        if ($input_password === $db_password) {
            $delete_sql = "DELETE FROM board WHERE num = $num";
            if (mysqli_query($conn, $delete_sql)) {
                echo "<script>alert('삭제되었습니다.'); location.href='list.php';</script>";
                exit;
            } else {
                echo "삭제 실패: " . mysqli_error($conn);
            }
        } else {
            // ⛔ 비밀번호 틀렸을 때
?>
            <div class="container my-5">
                <p class="text-danger fw-bold">❌ 비밀번호가 틀렸습니다.</p>
                <a href="delete_form.php?num=<?= $num ?>" class="btn btn-outline-secondary me-2">다시 시도</a>
                <a href="list.php" class="btn btn-outline-secondary">목록으로</a>
            </div>
<?php
        }
    } else {
        echo "<p>❌ 해당 글을 찾을 수 없습니다.</p>";
    }
    mysqli_close($conn);
} else {
    if ($num <= 0) {
        echo "잘못된 접근입니다.";
    }
}

include "include/footer.php";
?>