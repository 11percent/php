<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
    $array = array("빨강","주황","노랑"); // 배열 선언
    var_dump($array); // 배열의 타입과 값을 출력
    echo "<br>";
    echo $array[0]; // 배열의 첫 번째 요소 출력
    echo "<br>";
    ?>
    <?php
        class hello{
            public $name="홍길동"; // 속성 선언
            function sayHello(){ // 메소드 선언
            return $this->name."님 안녕하세요!"; // 속성 사용
        }
    }
        $msg = new hello(); // 객체 생성
        echo $msg->sayHello(); // 메소드 호출
        echo "<br>";
        var_dump($msg); // 객체의 타입과 값을 출력
        echo "<br>";
        $mynull = null; // null 변수 선언
        var_dump($mynull); // null 변수의 타입과 값을 출력
    ?>
</body>
</html>