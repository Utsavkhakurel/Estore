
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
echo "<h2> calender </h2>";
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= 4; $j++) {
            echo " <div class='box'> </div>";
        }
        echo "<br>";
        
    }

    ?>
</body>
</html>
