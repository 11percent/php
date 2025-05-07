<?php
    $animals = array("dog", "cat", "bird", "giraffe");
    $total = count($animals);
    echo "동물의 수 : $total <br>";
    array_push($animals, "bear", "rabbit", "snake");
    print_r($animals);
    echo "<br>";
    $poped_animal = array_pop($animals);
    echo $poped_animal . "가 삭제되었습니다.<br>";
    echo "삭제 후 동물의 수 : " . count($animals) . "<br>";    
    print_r($animals);
    
    array_unshift($animals, "zebra");
    echo "<br>";
    print_r($animals);
    $shifted_animal = array_shift($animals);
    echo $shifted_animal;
    echo "<br>";

    sort($animals);
    print_r($animals);
    echo "<br>";
    rsort($animals);
    print_r($animals);
    echo "<br>";

    $nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
    $total = array_sum($nums);
    echo "nums 배열의 합계 : $total <br>";


?>