<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $prijzen = [100, 200, 300, 400, 500];
   $i = 0;
   
   do 
   {
       if ($prijzen[$i] < 500)
       {
           echo "oorspronkelijke prijs: " . $prijzen[$i] . "<br>";
           echo "Nieuwe prijs: " . $prijzen[$i] + 50 . "<br><br>";
       }
       $i++;
   }
   while
   (
       $i < count($prijzen)
   );
   
    ?>
</body>
</html>