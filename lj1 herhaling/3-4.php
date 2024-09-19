<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $product = ["name" => "Laptop", "price" => 899.99, "inStock" => true];
  $product['brand'] = 'HP';
  $product['price'] = 799.99;
  echo $product['name'];
  echo '<br>';
  echo $product['price'];
  echo '<br>';
  echo $product['inStock'];
  echo '<br>';
  echo $product['brand'];
    ?>
</body>
</html>