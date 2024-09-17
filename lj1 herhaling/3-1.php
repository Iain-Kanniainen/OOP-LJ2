<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cities = array("Rotterdam", " Utrecht", " Vlaardingen" , " Den Haag");
    $cities[] = " Schiedam";
    echo $cities[0] , $cities[3] , $cities[4];
        ?>
</body>
</html>