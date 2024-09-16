<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $day = date("l");
    echo $day;
    switch ($day) {
        case "Monday":
            echo "Vandaag is het maandag";
            break;
        case "Tuesday":
            echo "Vandaag is het dinsdag";
            break;
        case "Wednesday":
            echo "Vandaag is het woensdag";
            break;
        default:
            echo "Onbekende dag";
    }
    ?>
</body>
</html>