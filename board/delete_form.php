<?php
include "include/header.php";
$num = isset($_GET['num']) ? intval($_GET['num']) : 0;
?>

<h2 class="my-5">비밀번호 확인</h2>
<form action="delete.php?num=<?= $num ?>" method="post">
    <input type="password" name="password" placeholder="비밀번호 입력" required class="form-control my-2">
    <button type="submit" class="btn btn-danger">삭제하기</button>
    <a href="view.php?num=<?= $num ?>" class="btn btn-secondary">취소</a>
</form>

<?php include "include/footer.php"; ?>