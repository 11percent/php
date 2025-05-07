<?php
function triangle($width, $height) {
    return $width * $height / 2;
}
$width = 10;
$height = 5;
echo "삼각형의 너비 : " . $width . "<br>";
echo "삼각형의 높이 : " . $height . "<br>";
echo "삼각형의 넓이 : " . triangle($width, $height) . "<br>";
echo "<hr>";

function sum1(){
    $sum1 = 0;
    for($i = 10; $i <= 50; $i++){
        $sum1 += $i;
    }
    return $sum1;
}
echo "10부터 50까지의 합 : " . sum1() . " ";
echo "<br>";

function sum2() {
    $sum2 = 0;
    for($j = 1; $j <= 100; $j++){
        if($j % 5 == 0) {
            $sum2 += $j;
        }
    }
    return $sum2;
}

echo "1부터 100까지의 5의 배수의 합 : " . sum2() . "<br>";
echo "<hr>";
?>

<?php
function moviechage($age, $time) {
    if($time == "조조") {
        if ($age < 18) {
            return 7000;
        } elseif($age < 65) {
            return 9000;
        } else {
            return 7000;
        }
    } elseif($time == "일반") {
        if ($age < 18) {
            return 8000;
        } elseif($age < 65) {
            return 10000;
        } else {
            return 7000;
        }
    }
}
$age = 70;
$time = "일반";
$pay = moviechage($age, $time);
echo "나이: " . $age . "세<br> 구분 : ". $time. "<br>입장료는 ". $pay . "원<br>";
echo "<hr>";
?>


<?php
function arboretumchage($headcount, $age, $time) {
    if($time == "일반") {
        if ($headcount = "개인" ){
            if ($age < 7) {
                return 6000;
            } elseif($age < 19) {
                return 7000;
            } else {
                return 9500;
            }
        } elseif ($headcount = "단체") {
            if ($age < 7) {
                return 5000;
            } elseif($age < 19) {
                return 6000;
            } else {
                return 8500;
            }
        }
    if($time == "할인 대상자") {
        if ($headcount = "개인" ){
            if ($age < 7) {
                return 5000;
            } elseif($age < 19) {
                return 6000;
            } else {
                return 8500;
            }
        } elseif ($headcount = "단체") {
            if ($age < 7) {
                return 4000;
            } elseif($age < 19) {
                return 5000;
            } else {
                return 7500;
            }
        }
    }
}
}
$time = "일반";
$headcount = "개인";
$age = 70;
$pay = arboretumchage($headcount, $age, $time);
echo "구분 :". $time. "<br>개인/단체 : ". $headcount. "<br> 나이: " . $age . "세 <br>입장료는 ". $pay . "원<br>";
echo "<hr>";
?>

<?php
$score = array(100, 90, 80, 70, 60, 50, 40, 30, 20, -12);
$index = 0;

while ($index < count($score)) {
    echo $score[$index] . " ";
    $index++;
}
echo "<hr>";
?>

<?php
$score2 = array(
    array(100, 90, 80, 70, 60, 50, 40, 30, 20, -12),
    array(32, 3, -34, 50, 55, 54, 41, 30, 20, -12),
    array(-2, -20, 80, 12, 40, 70, 40, 30, 20, -12)
);
for($i = 0; $i < count($score2); $i++) {
    $number = $i + 1;
    $row = implode(", ", $score2[$i]);
    echo "$number : $row<br>";
}
echo "<hr>";
?>


<?php
$nums = array();
for($i = 0; $i < 30; $i++) {
    $nums[] = rand(0, 100);
}
for($i=0; $i <30; $i++) {
    echo $nums[$i] . " ";
}
echo "<br>";
$count = array(
    "수" => 0,
    "우" => 0,
    "미" => 0,
    "양" => 0,
    "가" => 0
);

foreach($nums as $score) {
    if($score >= 90) {
        $count["수"]++;
    } elseif($score >= 80) {
        $count["우"]++;
    } elseif($score >= 70) {
        $count["미"]++;
    } elseif($score >= 60) {
        $count["양"]++;
    } elseif($score < 59) {
        $count["가"]++;
    }
}
echo "수 : " . $count["수"] . "명<br>";
echo "우 : " . $count["우"] . "명<br>";
echo "미 : " . $count["미"] . "명<br>";
echo "양 : " . $count["양"] . "명<br>";
echo "가 : " . $count["가"] . "명<br>";
echo "<hr>";    
?>

<?php
$seat = array(
    array(0,0,1,0,0,0,1,0,1,0),
    array(0,1,0,1,0,0,1,0,1,0),
    array(1,0,1,1,0,1,1,0,1,0),
    array(0,0,1,0,1,0,0,0,1,0),
    array(1,0,1,0,1,0,1,0,1,0)
);
foreach($seat as $row) {
    foreach($row as $item) {
            echo $item == 1 ? "■" : "□";
        }
        echo "<br>";
}
echo "<br>";
echo "□ : 예약 가능, ■ : 예약 불가능<br>";
echo "<hr>";
?>

<?php
$seat = array();
    for($i = 0; $i < 5; $i++) {
        $row = array();
        for($j = 0; $j < 10; $j++) {
            $row[] = rand(0, 1);
        }
        $seat[] = $row;
    }
for($i = 0; $i < count($seat); $i++) {
    for($j = 0; $j < count($seat[$i]); $j++) {
        echo $seat[$i][$j] == 1 ? "■" : "□";
    }
    echo "<br>";
}
echo "<br>";
echo "□ : 예약 가능, ■ : 예약 불가능<br>";
echo "<hr>";
?>