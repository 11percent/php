<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myColor = "yellow";
    switch($myColor) {
        case "red":
            echo "빨간색입니다.<br>";
            break;
        case "blue":
            echo "파란색입니다.<br>";
            break;
        case "green":
            echo "초록색입니다.<br>";
            break;
        case "yellow":
            echo "노란색입니다.<br>";
            break;
        default:
            echo "모르는 색입니다.<br>";
    }
    ?>
</body>
</html>