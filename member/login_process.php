<?php
    require_once "include/db.php";

    $userID = $_POST['userID'];
    $password = $_POST['password'];

    $sql = "select * from members where userID= ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $userID);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    if ($user) {
        if(password_verify($password, $user['password'])) {
            // 비밀번호가 일치하는 경우
            session_start();
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['userName'] = $user['userName'];
            echo "<script>alert('{$user['userName']}님 로그인 성공');</script>";
            echo "<script>location.href='index.php';</script>";
        } else {
            // 비밀번호가 틀린 경우
            echo "<script>alert('비밀번호가 틀렸습니다.');</script>";
            echo "<script>location.href='login.php';</script>";
        }

    } else {
        echo "<script>alert('로그인 실패');</script>";
        echo "<script>location.href='login.php';</script>";
    }
    mysqli_close($conn);
?>
