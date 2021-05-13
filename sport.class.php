
<?php

//Subclasse
class Sport extends Product {

    //attributi figli
    public $sport;
    public $brand;
    public $line;

    //construct funcion
    public function __construct(string $_name, float $_price, bool $_available, string $_productCode, float $_weight, string $_measures, string $_sport, string $_brand, string $_line)
    {
        parent::__construct($_name, $_price, $_available, $_productCode, $_weight, $_measures);
        $this -> sport = $_sport;
        $this -> brand = $_brand;
        $this -> line = $_line;

    }

    
}
