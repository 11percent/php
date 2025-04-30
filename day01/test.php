<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 3;
    $b = 5;

    $a += 2;
    $b = $a*3;

    $c = $a + $b; // 3 + 15 = 18
    $c++; // 18 + 1 = 19
    $c %= $a; // 19 % 5 = 4

    echo "$a, $b, $c"; // 5, 15, 4
    echo "<br>";


    $width = 5;
    $height = 10;
    $area = $width * $height / 2; // 면적 계산

echo "너비:".$width."<br>";
echo "높이:".$height."<br>";
echo "면적:".$area."<br>"; // 면적 출력

$inch =10;
$cm = $inch * 2.54; // 인치를 센티미터로 변환
echo "인치:".$inch."inch<br>";
echo "센티미터:".$cm."cm<br>"; // 센티미터 출력


$harfwidth = 5;
$circle = pow($harfwidth,2)*3.14; // 원의 면적 계산
echo "반지름:".$harfwidth."<br>";
echo "원의 면적:".$circle."<br>"; // 원의 면적 출력

$children = 5000;
$num1 = 3;
$adult = 8000;
$num2 = 2;
$total = ($children * $num1) + ($adult * $num2); // 총 금액 계산
echo "소인 입장료:".$children."원<br>";
echo "소인 수:".$num1."명<br>";
echo "대인 입장료:".$adult."원<br>";
echo "대인 수:".$num2."명<br>";
echo "전체 입장료:".$total."원<br>"; // 총 금액 출력

$book = 10000;
$discount = 10; // 10% 할인
$delivery = 2500; // 배송비
$finalPrice = $book - ($book * $discount / 100) + $delivery; // 최종 금액 계산
echo "책 가격:".$book."원<br>";
echo "할인율:".$discount."%<br>";
echo "배송비:".$delivery."원<br>";
echo "최종 금액:".$finalPrice."원<br>"; // 최종 금액 출력

    ?>
    
</body>
</html>