<?php
    function hello(){
        for($i = 1; $i <= 10; $i++){
            echo "hello<br>";
        }
    }
    hello();
    echo "<hr>";
    function plus($a, $b){
        $c = $a + $b;
        echo $c."<br>";
    }

    function return_plus($a, $b){
        $c = $a + $b;
        return $c;
    }
    plus(10,20);
    echo return_plus(30,40);
    echo "<hr>";

    function circle($r){
        return 3.14 * $r * $r;
    }
    echo circle(10);
?>