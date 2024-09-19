<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $products = 
   [
       ["name" => "laptop", "price" => 100, "inStock" => 10],
       ["name" => "phone", "price" => 200, "inStock" => 20],
       ["name" => "monitor", "price" => 300, "inStock" => 30],
       ["name" => "toetsenbord", "price" => 400, "inStock" => 40]
   ];
   echo $products[1]["name"];
   echo "<br>";
   echo $products[1]["price"];
   
   
   $products[3]["inStock"] = 120;
   
   $products += ["name" => "tablet", "price" => 299.99, "inStock" => 50];
   
   echo "</pre>";
    ?>
</body>
</html>