<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pilgi = 65;
    $silgi = 90;
    if($pilgi >= 70 && $silgi >= 70 ) {
        $result = "합격";
    }else {
        $result = "불합격";
    }
    echo "필기:" .$pilgi."점<br>";
    echo "실기:" .$silgi."점<br>";
    echo "결과:" .$result." <br>";

    $num= 9;
    if($num % 2 == 0) {
        echo $num."은 짝수입니다.<br>";
    } else {
        echo $num."은 홀수입니다.<br>";
    }
    $num02 = 10;
    echo $num02."은" .($num02%2==0?"짝수":"홀수");
?>
</body>
</html>