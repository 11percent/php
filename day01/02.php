<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>변수</title>
</head>
<body>
    <?php
    // 변수 선언
        $a = 10; // 정수형
        $b = 20;
        $c = $a + $b; // 덧셈
        echo $c; // 30
        echo "<br>";

        $korean = 90; // 국어 점수
        $english = 80; // 영어 점수
        $math = 85; // 수학 점수
        $sum = $korean + $english + $math; // 총점
        $avg = $sum / 3; // 평균
        $txt = "hello"; // 문자열
        $txt02 = 'hello'; // 문자열
        $x = 5 >= 3; // 비교 연산자
        $y = 5 <= 3; // 비교 연산자
        $num= -100.125;
        echo $sum;
        echo "<br>";
        echo $avg;
        echo "<br>";
        echo "<p>국어: $korean</P>, 영어: $english, 수학: $math, 총점: $sum, 평균: $avg"; // 문자열 보간
        echo "<br>";

        var_dump($korean); // 변수의 타입과 값을 출력
        echo "<br>";
        var_dump($txt); // 변수의 타입과 값을 출력
        echo "<br>";
        var_dump($txt02); // 변수의 타입과 값을 출력
        echo "<br>";
        var_dump($avg); // 변수의 타입과 값을 출력
        echo "<br>";
        var_dump($num); // 변수의 타입과 값을 출력
        echo "<br>";    
        var_dump($x); // 변수의 타입과 값을 출력
        echo "<br>";
        var_dump($y); // 변수의 타입과 값을 출력
        echo "<br>";
    ?>


</body>
</html>