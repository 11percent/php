<?php
$str = "hello php";
echo $str. "길이 : " .strlen($str) . "<br>";
echo $str. "php의 시작위치 : " .strpos($str,"php") . "<br>";
echo $str. "에서 hello 잘라내기 : " .substr($str,0,5) . "<br>";
echo "hello php 을 소문자로 : " .strtolower("hello PHP") . "<br>";
echo "hello php 을 대문자로 : " .strtoupper("hello PHP") . "<br>";
echo "I loke dog 에서 dog 을 cat 으로: " .str_replace("dog","cat","I like dog") . "<br>";
echo " &nbsp;&nbsp;&nbsp;&nbsp;  hello php &nbsp;&nbsp;&nbsp;&nbsp;에서 공백 제거  " .trim("       hello php       ") . "<br>";
echo " &nbsp;&nbsp;&nbsp;&nbsp;  hello php &nbsp;&nbsp;&nbsp;&nbsp;에서 왼쪽 공백 제거  " .ltrim("       hello php       ") . "<br>";
echo " &nbsp;&nbsp;&nbsp;&nbsp;  hello php &nbsp;&nbsp;&nbsp;&nbsp;에서 오른쪽 공백 제거  " .rtrim("       hello php       ") . "<br>";

$str = "I like php 에서 like";

echo "I like php 에서 like가 포함되어 있는지 : " .str_contains("I like php","like") . "<br>";

if(str_contains($str,"like")) {
    echo "I like php 에서 like가 포함되어 있습니다.<br>";
} else {
    echo "I like php 에서 like가 포함되어 있지 않습니다.<br>";
}

echo str_repeat("*",10) . "<br>";

$userID = "admin22";
echo substr($userID,0,2) . str_repeat("*",strlen($userID)-2) . "<br>";
echo str_pad($userID,10,"*",STR_PAD_BOTH) . "<br>";
echo str_pad($userID,10,"*",STR_PAD_LEFT) . "<br>";
echo str_pad($userID,10,"*",STR_PAD_RIGHT) . "<br>";


?>