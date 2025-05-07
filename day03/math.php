<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 10;
    $value = abs($x);
    echo $x."의 절대값: " . $value . "<br>";
    echo "4.3의 올림값: " . ceil(4.3) . "<br>";
    echo "4.3의 내림값: " . floor(4.3) . "<br>";
    echo "4.3의 반올림값: " . round(4.3) . "<br>";
    echo "4.3의 최대값: " . max(1,2,3) . "<br>";
    echo "4.3의 최소값: " . min(4,5,6) . "<br>";
    echo "10의 제곱값: " . pow(10,2) . "<br>";
    echo "25의 루트: " . sqrt(25) . "<br>";
    echo "100의 로그: " . log(100) . "<br>";
    echo "100의 10 로그: " . log(100,10) . "<br>";
    echo "100의 10 로그: " . log10(100) . "<br>";
    echo "랜덤값: " . rand() . "<br>";
    echo "랜덤값 1~45: " . rand(1,45) . "<br>";
    ?>
</body>
</html>