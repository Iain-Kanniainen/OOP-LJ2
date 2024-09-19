<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $grades = [8.5, 7.0, 6.5, 9.0, 4.5];
   foreach ($grades as $x) 
   {
       echo "het cijfer is: $x <br>";
       if ($x >= 5.5)
       {
           echo "Voldoende <br><br>";
       }
       else 
       {
           echo "Onvoldoende <br><br>";
       }
   }
    ?>
</body>
</html>