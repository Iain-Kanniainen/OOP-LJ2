<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $matrix =  
     [
      [1,2,3],
      [4,5,6],
      [7,8,9]
     ];

     for ($a = 0; $a < count($matrix); $a++)
{
    for ($b = 0; $b < count($matrix[$a]); $b++)
    {
        echo $matrix[$a][$b] . " "; 
    }
    echo "<br>"; 
}
    ?>
</body>
</html>