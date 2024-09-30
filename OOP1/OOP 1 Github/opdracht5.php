<?php

class Product
{
    public $name;
    public $price;
    public $category;

    public function construct($name)
    {
        $this->name = strtolower($name);
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }

    public function showSalesPrice()
    {
        return number_format($this->price * 1.09, 2);
    }
}

$product1 = new Product("used crack pipe");
$product1->setPrice(20);
$product1->setCategory("consumer goods");

$product2 = new Product("rehab burger");
$product2->setPrice(13);
$product2->setCategory("fast food");

echo $product1->showSalesPrice() . "<br>";
echo $product1->name . "<br>";
echo $product1->category . "<br>";

echo $product2->showSalesPrice() . "<br>";
echo $product2->name . "<br>";
echo $product2->category . "<br>";