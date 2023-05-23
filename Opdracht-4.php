<?php

class Product{
    public $name;
    public $price;
    public $catagory;

    public function setName($name){
        $this->name = ucfirst($name);
    }

    public function setCatagory($catagory){
        $this->catagory = strtoupper($catagory);
    }

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }
}


$Appel = new Product();
$Appel->setName(name: "apple");
$Appel->setCatagory("fruit");

$Appel->price = "2";

$Banaan = new Product();
$Banaan->setName(name: "banana");
$Banaan->setCatagory("fruit");

$Banaan->price = "2";

$Kiwi = new Product();
$Kiwi->setName(name: "kiwi");
$Kiwi->setCatagory("fruit");

$Kiwi->price = "2.49";

$Mandarijn = new Product();
$Mandarijn->setName(name: "melon");
$Mandarijn->setCatagory("fruit");

$Mandarijn->price = "2.39";

echo $Appel->formatPrice(), "<br>";
echo $Appel->name, "<br>";
echo $Appel->catagory, "<br>", "<br>";

echo $Banaan->formatPrice(), "<br>";
echo $Banaan->name, "<br>";
echo $Banaan->catagory, "<br>", "<br>";

echo $Kiwi->formatPrice(), "<br>";
echo $Kiwi->name, "<br>";
echo $Kiwi->catagory, "<br>", "<br>";

echo $Mandarijn->formatPrice(), "<br>";
echo $Mandarijn->name, "<br>";
echo $Mandarijn->catagory, "<br>", "<br>";
?>