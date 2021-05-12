
<?php

//classe madre
class Products {
    //attributi
    public $name;
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

   
}

//classe figlia
class Clothes extends Products {

    //attributi figli
    public $size;
    public $outfit;
    public $color;
    public $genre;
    public $style;
    public $fabric;

    //construct funcion
    public function __construct(string $_name, float $_price, bool $_available, string $_productCode, float $_weight, string $_measures, string $_size, string $_outfit, string $_color, string $_genre, string $_style, string $_fabric)
    {
        parent::__construct($_name, $_price, $_available, $_productCode, $_weight, $_measures);
        $this -> size = $_size;
        $this -> outfit = $_outfit;
        $this -> color = $_color;
        $this -> genre = $_genre;
        $this -> style = $_style;
        $this -> fabric = $_fabric;

    }

    //metodi
    public function isAvailable($item){
        if ($item == true){
            return "Disponibile in stock";
        } else{
            return "Al momento non disponibile";
        }
    }
}


//ISTANZE

$clothe_1 = new Clothes("Fuss Beanie Hat", 22, true, "X145FFBB", 0.1, "22x10x15", "L", "Cappello a cuffia", "Grigio", "Unisex", "Casual", "Cotone 100%");
$clothe_2 = new Clothes("Madrigals' Sweater Shirt", 66, false, "38FNNWF34", 0.8, "80x170x90", "M", "Felpa sportiva", "Blu Petrolio", "Uomo", "Sportswear", "Cotone 40% / Poliestere 60%");



// ARRAY PER FOREACH PROVA+

$clothes = [
    $clothe_1,
    $clothe_2
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
    
    <?php foreach ($clothes as $clothe){ ?>

    <h2><?php echo $clothe -> name ; ?></h2>
    <ul>
        <li>Prezzo: <?php echo $clothe -> price ; ?> €</li>
        <li>Disponibilità: <?php echo $clothe-> isAvailable($clothe->available) ; ?></li>
        <li>Codice prodotto: <?php echo $clothe -> productCode ; ?></li>
        <li>Peso in kg: <?php echo $clothe -> weight ; ?></li>
        <li>Misure in cm: <?php echo $clothe -> measures ; ?></li>
        <li>Taglia: <?php echo $clothe -> size ; ?></li>
        <li>Tipo di indumento: <?php echo $clothe -> outfit ; ?></li>
        <li>Colore: <?php echo $clothe -> color ; ?></li>
        <li>Linea abbigliamento: <?php echo $clothe -> genre ; ?></li>   
        <li>Trend: <?php echo $clothe -> style ; ?></li>    
        <li>Tessuto: <?php echo $clothe -> fabric ; ?></li>         
    </ul>
    
    <?php } ?>
    



</body>
</html>