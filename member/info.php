<?php
include "include/header.php";
require_once "include/db.php"; 
?>


<h2 class="my-5">회원정보</h2>

<?php


$userID = $_SESSION['userID'] ?? null;
if (!$userID) {
    echo "<p>❌ 로그인 후 이용해주세요.</p>";
    exit;
}


$sql = "SELECT * FROM members WHERE userID = '$userID'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $userID = htmlspecialchars($row['userID']);
    $userName = htmlspecialchars($row['userName']); 
    $userEmail = htmlspecialchars($row['userEmail']);

    echo "<table border='2' class='table table-dark table-striped-columns'>";
    echo "<colgroup>";
    echo "<col style='width: 25%;'>";
    echo "<col style='width: 75%;'>";
    echo "</colgroup>";
    echo "<tr><th>아이디</th><td>$userID</td></tr>";
    echo "<tr><th>이름</th><td>$userName</td></tr>";
    echo "<tr><th>이메일</th><td>$userEmail</td></tr>";
    echo "</table>";
} else {
    echo "<p>❌ 해당 회원을 찾을 수 없습니다.</p>";
    exit;
}
?>
    <div class="my-5 text-center">
    <a href="update.php" class="btn btn-dark">회원정보 수정</a>
    <a href="delete.php" class="btn btn-danger">회원탈퇴</a>
    </div>
<?php
include "include/footer.php";
?>
