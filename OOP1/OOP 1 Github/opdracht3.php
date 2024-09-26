<?php

class product
{public $name;
public $price;

public function formatPrice()
{
    return number_format($this->price * 1.09 , 2);
}

}

$product1 = new product();
$product1->name = "used crack pipe";
$product1->price = 20;

$product2 = new product();
$product2->name = "rehab burger";
$product2->price = 13;

echo $product1->formatPrice();
echo $product1->name, "<br>";
echo $product1->price;