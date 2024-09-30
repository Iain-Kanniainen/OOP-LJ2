<?php
class Product
{


    public function __construct(public $price, public $description, public $category = "dranken", public $name = "een game", public $rating = "3")
    {
        $this->name = ucfirst($name);
    }


}

$drank = new Product("1", "lekker drank", "dranken", "cola", "5");
$game1 = new Product("15", "goeie indie game", "game", "hollow knight", "5");
$game2 = new Product("60", "dure triple A game", "game", "rainbow six siege", "2");
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
echo $drank->price . "<br>";

echo "<br>";
echo $game1->name. "<br>";
echo $game1->rating. "<br>";
echo $game1->description. "<br>";
echo $game1->category. "<br>";
echo $game1->price . "<br>";

echo "<br>";
echo $game2->name. "<br>";
echo $game2->rating. "<br>";
echo $game2->description. "<br>";
echo $game2->category. "<br>";
echo $game2->price . "<br>";
