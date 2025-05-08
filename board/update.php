<?php
require_once "include/db.php";

// 입력값 가져오기
$name = mysqli_real_escape_string($conn, $_POST['name']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$num = intval($_POST['num']);
$mode = isset($_POST['mode']) ? $_POST['mode'] : '';

// DB에서 기존 글의 비밀번호 가져오기
$sql = "SELECT password FROM board WHERE num = $num";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $db_password = $row['password'];

    if ($password === $db_password) {
        // 비밀번호 일치 → 업데이트 수행
        $update_sql = "UPDATE board SET name='$name', subject='$subject', content='$content' WHERE num=$num";
        if (mysqli_query($conn, $update_sql)) {
            echo "<script>alert('수정되었습니다.'); location.href='view.php?num=$num';</script>";
            exit;
        } else {
            echo "업데이트 실패: " . mysqli_error($conn);
        }
    } else {
        // 비밀번호 틀림
        // echo "<script>alert('❌ 비밀번호가 틀렸습니다.'); history.back();</script>";
        echo "<script>location.href='update_process.php?num=$num&error=y&mode=$mode';</script>";
    }
} else {
    echo "해당 글을 찾을 수 없습니다.";
}

mysqli_close($conn);
