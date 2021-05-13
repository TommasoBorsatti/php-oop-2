
<?php

//classe madre
class Product {
    //attributi
    protected $name;
    public $price;
    public $available;
    public $productCode;
    public $weight;
    public $measures;

    //construct funcion
    public function __construct(string $_name, float $_price, bool $_available, string $_productCode, float $_weight, string $_measures)
    {
        $this -> name = $_name;
        $this -> price = $_price;
        $this -> available = $_available;
        $this -> productCode = $_productCode;
        $this -> weight = $_weight;
        $this -> measures = $_measures;
    }

    //metodi
    public function isAvailable($item)
    {
        if ($item == true){
            return "Disponibile in stock";
        } else{
            return "Al momento non disponibile";
        }
    }

    // funzione getter
    public function getName(): string
    {
        return $this -> name;
    }

   
}
