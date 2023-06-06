<?php
    class Product
    {

        public function __construct(public $price, public $name = "een muzieksoort", public $currency = "&euro")
        {
            $this->name = ucfirst($name);
            $this->price = $price;
            $this->currency = $currency;
        }

        public function formatPrice()
        {
            return number_format($this->price, decimals:2);
        }
    }

    $klassiek = new Product(price:40, currency:"€", name:"klassiek");
    $jazz = new Product(price:10, name:"jazz");

    echo "<br>".$klassiek->name."<br>";
    echo $klassiek->currency."<br>";
    echo $klassiek->price."<br><br>";

    echo $jazz->formatPrice(). "<br>";
    echo $jazz->name. "<br>";
    echo $jazz->price. "<br><br>";
    
    var_dump($klassiek);
    
    var_dump($jazz);
?>