<?php
    $servername = "localhost";
    $username = "KANG";
    $password = "1234";
    $db = "sample";

    $conn = mysqli_connect($servername, $username, $password, $db);
    if (!$conn) {
        die("연결 오류 : " . mysqli_connect_error());
    }
    // $sql = "create table friend(
    //     num int not null auto_increment primary key,
    //     name varchar(50) not null,
    //     tel varchar(20) not null,
    //     address varchar(100)
    //     )";
    $sql = "insert into friend(name,tel,address) values(
        '서태웅','010-1234-5678','서울시 강남구 역삼동'
    )";


    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "테이블 생성 성공<br>";
    } else {
        echo "테이블 생성 실패: " . mysqli_error($conn) . "<br>";
    }

    mysqli_close($conn);

?>