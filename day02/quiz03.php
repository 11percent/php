<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 95;
    $grade = "";
    if($score >= 90) {
        $grade = "수";
    } elseif($score >= 80) {
        $grade = "우";
    } elseif($score >= 70) {
        $grade = "미";
    } elseif($score >= 60) {
        $grade = "양";
    } elseif($score < 59) {
        $grade = "가";
    } else {
        $grade = "잘못된 점수입니다.";
    }
    echo "시험점수: " . $score . "<br>";
    echo "등급: " . $grade . "<br>";
?>

<?php
    $i = 100;
    while ($i <= 200) {
        echo $i . " ";
        $i+= 2;
    }
?>
<hr>
<?php
$i = 100;
while ($i <= 200) {
    if ($i % 2 == 1) {
        echo $i . " ";
    }
    $i++;
}
?>
<hr>
<?php
for($i = 100; $i <= 200; $i++) {
    if ($i % 2 == 1) {
        echo $i . " ";
    }
}
?>
<hr>

<?php
$count = 0;
for($i = 3; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        echo $i . " ";
        $count++;
        if($count % 10 == 0) {
            echo "<br>";
        }
    }
}
?>
<hr>

<?php
$count = 0;
for($i = 300; $i <= 350; $i++) {
    if ($i % 5 != 0) {
        echo $i . " ";
        $count++;
        if($count % 10 == 0) {
            echo "<br>";
        }
    }
}
?>
<hr>
<?php
$i = 10;
while ($i <= 20) {
    $cm = $i * 2.54;
    echo "$i 인치 = $cm 센티미터<br>";
    $i += 2;
}
?>
<hr>
<?php
for($i = 10; $i <= 20; $i+=2) {
    $cm = $i * 2.54;
    echo "$i 인치 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = $cm 센티미터<br>";
}
?>

<hr>
<?php
for($i = 10; $i <= 20; $i+=2) {
    $won = $i * 1180.60;
    $euro = $i * 1350.30;
    echo "$i 달러 = $won 원 = $euro 유로 <br>";
}
?>

<hr>
<?php
    $string = "";
    $string.= "<table border='1'><tbody>";
    $string .= "<tr><th>달러($)</th><th>원(₩)</th><th>유로(€)</th></tr>";
    $string.= "<tr>";
    for($i = 10; $i <= 20; $i+=2) {
        $won = $i * 1180.60;
        $euro = $i * 1350.30;
        $string .= "<tr>";
        $string .= "<td>$i</td><td>$won</td><td>$euro</td>";
        $string .= "</tr>";
    }
    $string .= "</tbody></table>";
    echo $string;
?>
<hr>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>
<hr>
<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>

</body>
</html>