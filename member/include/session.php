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