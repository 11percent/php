<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 17;
    $b = $a % 10;
    echo $b; // 7
    echo "<br>";
    $b = $b %3;
    echo $b; // 1
    echo "<br>";
    $c = 2 % 5;
    echo $c; // 2
    echo "<br>";

    $e=10;
    echo ++$e; // 11
    echo "<br>";
    echo $e++; // 11
    echo "<br>";

    $name = "홍길동";
    echo $name."님 안녕하세요!"; // 홍길동님 안녕하세요!
    echo "<br>";
    $name02 = "사자";
    $name03 = "고양이";
    $changeName = $name02."/".$name03; // 사자/고양이
    echo $changeName;
    echo "<br>";

    $name04 = "사과";
    $name04 .= "쥬스";
    echo $name04; // 사과쥬스
    echo "<br>";
    ?>
    
</body>
</html>