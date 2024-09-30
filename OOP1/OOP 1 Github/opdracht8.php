<?php

class Product
{

    public $name;
    public $price;
    public $category;
    public $rating;
    public $description;


    public function __construct($price, $description, $category = "dranken", $name = "een game", $rating = "3")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->rating = $rating;

    }

    public function gettheproduct()
    {
        return "Het product ". $this->name."kost ". $this->price;
    }


}

$drank = new Product("1", "lekkere soda", "dranken", "pepsi ", "5");
echo $drank->gettheproduct() . "<br>";
$game1 = new Product("15", "indie game", "game", "hollow knight ", "5");
echo $game1->gettheproduct() . "<br>";
$game2 = new Product("60", "dure AAA game", "game", "rainbow six siege ", "2");
echo $game2->gettheproduct() . "<br>";
//$game2 = new Product("bla", description:"...",price: 10);
//$game2->name = "Mario kart";
//$game2->description = "...";
//$game2->price = 10;
//Super Mario 64
//echo $game1->formatPrice(). "<br>";