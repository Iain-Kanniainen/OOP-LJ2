<?php
class Product
{

    public $name;
    public $category;
    public $rating;
    public $price;
    public $description;



    public function formatPrice()
    {
        return number_format($this->price * 1.21, decimals:2);
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }



    public function __construct($description,$category = "dranken", $name = "een game", $rating = "3")
    {
        $this->name = ucfirst($name);
        $this->description = $description;
        $this->category = $category;
        $this->rating= $rating;
    }


}

$drank = new Product("lekkere soda",rating: "4.5", name: "pepsi");
$drank->setPrice(3);
$game1 = new Product("indie game",category:"game");
$game1->setPrice(10);
$game2 = new Product("dure triple A game",category:"game");
$game2->setPrice(60);
//$game2 = new Product("bla", description:"...",price: 10);
//$game2->name = "Mario kart";
//$game2->description = "...";
//$game2->price = 10;
//Super Mario 64
//echo $game1->formatPrice(). "<br>";

echo "<br>";
echo $drank->name. "<br>";
echo $drank->rating. "<br>";
echo $drank->description. "<br>";
echo $drank->category. "<br>";
echo $drank->formatprice() . "<br>";

echo "<br>";
echo $game1->name. "<br>";
echo $game1->rating. "<br>";
echo $game1->description. "<br>";
echo $game1->category. "<br>";
echo $game1->formatprice() . "<br>";

echo "<br>";
echo $game2->name. "<br>";
echo $game2->rating. "<br>";
echo $game2->description. "<br>";
echo $game2->category. "<br>";
echo $game2->formatprice() . "<br>";