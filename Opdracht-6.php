<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name;
    public $price;
    public $catagory;
    public $currency;

    public function __construct($name, $price, $currency = "&euro"){
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }

    public function setCatagory($catagory){
        $this->catagory = strtoupper($catagory);
    }
}


$Appel = new Product(name: "Appel", price: 2, currency: "$");
$Appel->setCatagory("fruit");

$Banaan = new Product(name: "Banaan", price: 2, currency: "$");
$Banaan->setCatagory("fruit");;

$Kiwi = new Product(name: "Kiwi", price: 2.49, currency: "$");
$Kiwi->setCatagory("fruit");

$Mandarijn = new Product(name: "Mandarijn", price: 2.39, currency: "$");
$Mandarijn->setCatagory("fruit");


echo $Appel->name, "<br>";
echo $Appel->catagory,  "<br>";
echo $Appel->currency;
echo $Appel->formatPrice(),  "<br>", "<br>";

echo $Banaan->name, "<br>";
echo $Banaan->catagory, "<br>";
echo $Banaan->currency;
echo $Banaan->formatPrice(), "<br>", "<br>";

echo $Kiwi->name, "<br>";
echo $Kiwi->catagory, "<br>";
echo $Kiwi->currency;
echo $kiwi->formatPrice(),  "<br>", "<br>";

echo $Mandarijn->name, "<br>";
echo $Mandarijn->catagory, "<br>";
echo $Mandarijn->currency;
echo $Mandarijn->formatPrice(), "<br>", "<br>";
?>