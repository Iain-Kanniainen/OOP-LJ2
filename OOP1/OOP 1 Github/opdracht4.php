<?php
global $product1, $product1;

class product
{
    public $name;
    public $price;
    public $category;

    public function Setname($name)
    {
        $this->name = strtolower($name);
    }

    public function Setcategory($category)
    {
        $this->category = strtoupper($category);
    }

    public function showSalesPrice()
    {
        return number_format($this->price * 1.09, decimals: 2);
    }
}

$product1 = new product();
$product1->Setname( name: "used crack pipe");
$product1->Setcategory(category: "consumer goods");
$product1->price = 20;

echo $product1->showSalesPrice() . "<br>";
echo $product1->name. "<br>";
echo $product1 ->category;

