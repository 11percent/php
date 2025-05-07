<?php
// date_default_timezone_set("Asia/Seoul");
$today = date("Y년 m월 d일 H:i:s");
echo $today . "<br>";

$timestamp = time();
echo $timestamp . "<br>"; //unix 기준으로 흘러온 초 unix 기준의 시간
$current = date("Y-m-d H:i:s", $timestamp) . "<br>";
echo $current; //timestamp를 기준으로 현재시간을 구함
$afterOneMinute = date("Y-m-d H:i:s", $timestamp + 60*60) . "<br>";
echo $afterOneMinute. "<br>"; //timestamp
$micriotimestamp = microtime();
echo $micriotimestamp . "<br>"; //마이크로초 기준으로 흘러온 초
?>