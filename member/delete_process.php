<?php
require_once "include/db.php";
session_start();

$userID = $_SESSION['userID'] ?? null;
$inputPassword = $_POST['password'] ?? '';

if (!$userID || !$inputPassword) {
    echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    exit;
}

// 1. DB에서 현재 사용자 정보 조회
$sql = "SELECT password FROM members WHERE userID = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $userID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

// 2. 비밀번호 검증
if ($user && password_verify($inputPassword, $user['password'])) {
    // 3. 탈퇴 처리 (예: 계정 삭제)
    $sql = "DELETE FROM members WHERE userID = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $userID);
    mysqli_stmt_execute($stmt);

    // 4. 로그아웃
    session_unset();
    session_destroy();
    echo "<script>alert('회원 탈퇴가 완료되었습니다.'); location.href='index.php';</script>";
} else {
    echo "<script>alert('비밀번호가 일치하지 않습니다.'); history.back();</script>";
}

mysqli_close($conn);
?>
