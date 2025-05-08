<?php
    $servername = "localhost";
    $username = "KANG";
    $password = "1234";
    $db = "sample";

    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
        die("연결 오류 : " . mysqli_connect_error());
    }
    // 회원가입 처리

    $userID = $_POST['userID'];
    $password = $_POST['password'];
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $regDate = date("Y-m-d H:i:s");
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // 비밀번호 해시화

    // $sql = "INSERT INTO members VALUES (NULL, '$userID', '$userName', '$password', '$userEmail', '$regdate',9,0)";
    // mysqli_query($conn, $sql);
    $sql = "INSERT INTO members VALUES (NULL, ?, ?, ?, ?, '$regDate',9,0)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $userID, $userName, $hashedPassword, $userEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    // 회원가입 성공 후 로그인 페이지로 이동
    echo "<script>alert('회원가입이 완료되었습니다.');</script>";
    echo "<script>location.href='login.php';</script>";
?>