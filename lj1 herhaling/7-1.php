<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<>
<body>
    <form action="verwerk.php" method="post">

        Telefoon nummer: <input type="text" name="telnumber">;
        "Verjaardag" <input type="date" name="birthday">;
        <input type="submit" value="submit"  >
    </form>
</body> 
</html>
<?php

$telnumber = $_POST['telnumber'];
$birthday = $_POST['birthday'];

echo "uw nummer:" . $telnumber . "<br>";
echo "Verjaardag:" . $birthday;
?>