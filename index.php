
<?php

require_once  __DIR__ . "/product.class.php";
require_once  __DIR__ . "/clothe.class.php";
require_once  __DIR__ . "/sport.class.php";



//ISTANZE
$miscellanous_1= new Product ("Sedia Kinski", 34, true, "ASAD4589", 4.2, "40x80x56");
$miscellanous_2= new Product ("Vaso per piante Stuttgart", 8, true, "FH4658FJ", 0.1, "12x12x8");

$clothe_1 = new Clothe ("Fuss Beanie Hat", 22, true, "X145FFBB", 0.1, "22x10x15", "L", "Cappello a cuffia", "Grigio", "Unisex", "Casual", "Cotone 100%");
$clothe_2 = new Clothe ("Madrigals' Sweater Shirt", 66, false, "38FNNWF34", 0.8, "80x170x90", "M", "Felpa sportiva", "Blu Petrolio", "Uomo", "Sportswear", "Cotone 40% / Poliestere 60%");

$sport_1 = new Sport ("Roteiro PRO", 60, false, "FHE74858", 0.2, "25x25x25", "Pallone da calcio", "Nike", "Nike Pro Futebol");
$sport_2 = new Sport ("Spalding XS23", 58, true, "HR748FWI", 0.3, "29x29x29", "Pallone da basket", "Spalding", "NBA 4real");



// ARRAY PER FOREACH PROVA+

$miscellanous = 
[
    $miscellanous_1,
    $miscellanous_2,
];

$clothes = 
[
    $clothe_1,
    $clothe_2
];

$sports = 
[
    $sport_1,
    $sport_2
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

    <h1>IL NOSTRO STORE</h1>

    <h2>-GENERALI-</h2>

    <?php foreach ($miscellanous as $item){ ?>
    
    <h3><?php echo $item -> getName() ; ?></h3>
    <ul>
        <li>Prezzo: <?php echo $item -> price ; ?> €</li>
        <li>Disponibilità: <?php echo $item-> isAvailable($item->available) ; ?></li>
        <li>Codice prodotto: <?php echo $item -> productCode ; ?></li>
        <li>Peso in kg: <?php echo $item -> weight ; ?></li>
        <li>Misure in cm: <?php echo $item -> measures ; ?></li>
    </ul>

    <?php } ?>

    <h2>-ABBIGLIAMENTO-</h2>
    
    <?php foreach ($clothes as $clothe){ ?>
    
    <h3><?php echo $clothe -> getName() ; ?></h3>
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

    <h2>-ARTICOLI SPORTIVI-</h2>
    
    <?php foreach ($sports as $sport){ ?>
    
    <h3><?php echo $sport -> getName() ; ?></h3>
    <ul>
        <li>Prezzo: <?php echo $sport -> price ; ?> €</li>
        <li>Disponibilità: <?php echo $sport-> isAvailable($sport->available) ; ?></li>
        <li>Codice prodotto: <?php echo $sport -> productCode ; ?></li>
        <li>Peso in kg: <?php echo $sport -> weight ; ?></li>
        <li>Misure in cm: <?php echo $sport -> measures ; ?></li>
        <li>Tipo di attrezzatura: <?php echo $sport -> sport ; ?></li>
        <li>Marca: <?php echo $sport -> brand ; ?></li>
        <li>Linea: <?php echo $sport -> line ; ?></li>
    </ul>

    <?php } ?>
    
</body>
</html>

