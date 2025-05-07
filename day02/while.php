<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 1;
    while ($i <= 10) {
        echo $i . "<br>";
        $i++;
    }
    ?>
    <hr>
    <?php
    $i = 1;
    $sum = 0;
    while ($i <= 10) {
        $sum += $i;
        $i++;
    }
    echo "1부터 10까지의 합은: " . $sum . "<br>";
    ?>
    <hr>
    <?php
    for($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }
    ?>
    <hr>
    <?php
    $string = "";
    $string.= "<table border='1'><tbody>";
    for($i = 2; $i <= 9; $i++) {
        $string.= "<tr>";
        for($j = 1; $j <= 9; $j++) {
            $result = $i * $j;
            $string.= "<td>" . $i . " * " . $j . " = " . $result . "</td>";
        }
        $string.= "</tr>";
    }
    $string.= "</table>";
    echo $string;
    ?>
</body>
</html>