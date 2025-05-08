<?php
session_start();
$userName="";
if (isset($_SESSION['userName'])) {
    $userName = $_SESSION['userName'];
}
$userID="";
if (isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <i class="bi bi-bootstrap-fill me-2" style="font-size: 2rem;"></i>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">BOARD</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>

                <?php if (isset($_SESSION["userName"])) { ?>
                    <div class="col-md-3 text-end">
                        <a href="info.php?userID=<?=$_SESSION['userID']?>" class="btn btn-outline-light me-2"><?=$userName ?></a>
                        <a href="logout.php" class="btn btn-warning">Logout</a>
                    </div>
                <?php } else { ?>
                    <div class="col-md-3 text-end">
                        <a href="login.php" class="btn btn-outline-light me-2">Login</a>
                        <a href="signup.php" class="btn btn-outline-light me-2">Sign-up</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </header>
    <div class="container">
