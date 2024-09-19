<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $countries = 
   [
       ["land"=>"Oostenrijk", "capital"=>"Vienna"],
       ["land"=>"Ierland", "capital"=>"Dublin"],
       ["land"=>"Tsjechië", "capital"=>"Praag"]
   ];
   foreach ($countries as $country) 
   {
       echo 'de hoofdstad van ' , $country["land"]." is ".$country["capital"]."<br>";
   }
    ?>
</body>
</html>