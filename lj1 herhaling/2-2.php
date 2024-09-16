<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 89;
    if ($score >= 90) {
        echo "Je hebt een A";
    } elseif ($score >= 80) {
        echo "Je hebt een B";
    } elseif ($score >= 70) { 
        echo "Je hebt een C";
    } else {
        echo "Je moet beter je best doen";
    }
    ?>
</body>
</html>