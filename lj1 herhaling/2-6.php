<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 86;
    switch ($score)
    {
        case $score > 90:
            echo "Geweldig";
            break;
        case $score >= 75:
            echo "Goed";
            break;
        case $score >= 55:
            echo "Voldoende";
            break;
        default:
        echo "onvoldoende";
    }
    
    $checker = $score > 55 ? " Geslaagd" : " Gezakt";
    echo $checker;
    ?>
</body>
</html>