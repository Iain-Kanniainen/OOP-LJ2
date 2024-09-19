<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $a = 5;
   $b = 1;
   do
   {
       $b = rand(1, 10);
       echo "geraden: $b"."<br>";
   
   }
   while($b != $a);   
    ?>
</body>
</html>