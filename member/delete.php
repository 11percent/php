<?php
include "include/header.php";
?>

<h2 class="my-5">비밀번호 확인</h2>
<form action="delete_process.php" method="post">
    <input type="password" name="password" placeholder="비밀번호 입력" required class="form-control my-2">
    <button type="submit" class="btn btn-danger">탈퇴하기</button>
    <a href="index.php" class="btn btn-secondary">취소</a>
</form>

<?php include "include/footer.php"; ?>