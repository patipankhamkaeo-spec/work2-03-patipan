<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="all">
    <div class="card2">
        <div class="card3">
     <?php
        $radius = $_POST["radius"];
        $hight = $_POST["hight"];
        echo "รัศมี :" . $radius . "<br>";
        echo "สูง :" . $hight . "<br>";
        $VolumeofaCylinder = 3.14 * ($radius ** 2) * $hight;
        echo "ปริมาตรทรงกระบอก :" . $VolumeofaCylinder . "<br>";
    ?>
    <a href="index.php">กลับ</a>
 </div>
</div>
</div>
</body>
</html>