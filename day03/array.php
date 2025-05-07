<?php
    $score = array(100, 90, 80, 70, 60, 50, 40, 30, 20, "grade");
    echo $score[0] . "<br>";
    echo $score[1] . "<br>";
    echo $score[2] . "<br>";
    echo $score[3] . "<br>";
    echo $score[4] . "<br>";

    for($i=0; $i < count($score); $i++) {
        echo $score[$i] . "<br>";
    }
    echo "<hr>";

    foreach($score as $item) {
        echo $item . "<br>";
    }
    echo "<hr>";

    foreach($score as $index => $item) {
        echo "[$index] => $item <br>";
    }
    echo "<hr>";

?>

<?php
//연관 배열 map
$memeber = array(
        array("userid"=>"jjang051", 
        "password"=>"1234", 
        "username"=>"홍길동", 
        "email"=>"toooo@daum.net"),
        array("userid"=>"hong", 
        "password"=>"1234", 
        "username"=>"채치수", 
        "email"=>"to2@daum.net"),
        array("userid"=>"jja22", 
        "password"=>"123455", 
        "username"=>"손흥민", 
        "email"=>"t222o@daum.net")
);
        // echo "userid : " . $memeber[0]["userid"] . "<br>";
        // echo "password : " . $memeber[0]["password"] . "<br>";
        // echo "username : " . $memeber[0]["username"] . "<br>";
        // echo "email : " . $memeber[0]["email"] . "<br>";
        // echo "<hr>";
        // echo "userid : " . $memeber[1]["userid"] . "<br>";
        // echo "password : " . $memeber[2]["password"] . "<br>";
        // echo "username : " . $memeber[2]["username"] . "<br>";
        // echo "email : " . $memeber[1]["email"] . "<br>";
        foreach($memeber as $item) {
            echo "userid : " . $item["userid"] . "<br>";
            echo "password : " . $item["password"] . "<br>";
            echo "username : " . $item["username"] . "<br>";
            echo "email : " . $item["email"] . "<br>";
            echo "<hr>";
        }
        for($i=0; $i < count($memeber); $i++) {
            echo "userid : " . $memeber[$i]["userid"] . "<br>";
            echo "password : " . $memeber[$i]["password"] . "<br>";
            echo "username : " . $memeber[$i]["username"] . "<br>";
            echo "email : " . $memeber[$i]["email"] . "<br>";
            echo "<hr>";
        }
        echo "<hr>";
?>