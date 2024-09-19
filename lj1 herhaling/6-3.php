<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $book = ["title"=>"1984", "author"=>"George Orwell", "year"=>"1949"];

   foreach ($book as $x => $y) 
   {
       echo "de $x is : $y <br>";
   }
   
    ?>
</body>
</html>