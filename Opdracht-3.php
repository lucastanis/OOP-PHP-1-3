<?php
// Class 'Product' is the class for all the products.
class Product{
    public $name;
    public $price;

    public function formatPrice(){
        return number_format($this->price, decimals: 2);
    }
}

// Softdrinks (Products)
$fanta = new Product();
$fanta->name = "Coca-Cola";
$fanta->price = "2";

$cassis = new Product();
$cassis->name = "Coca-Cola Zero";
$cassis->price = "2";

$royalclub = new Product();
$royalclub->name = "Coca-Cola Light";
$royalclub->price = "2.49";

$cola = new Product();
$cola->name = "Pepsi";
$cola->price = "2.39";

echo $fanta->formatPrice(), "<br>";
echo $fanta->name, "<br>", "<br>";

echo $cassis->formatPrice(), "<br>";
echo $cassis->name, "<br>", "<br>";

echo $royalclub->formatPrice(), "<br>";
echo $royalclub->name, "<br>", "<br>";

echo $cola->formatPrice(), "<br>";
echo $cola->name, "<br>", "<br>";

?>