<?php
class MachineACafe
{
    private $marque;
    private $cafe;
    private $enFonction;
    private $sucre;
    private $prix;
    private $clientargent;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }
    public function allumage($enFonction)
    {
        $this->enFonction = $enFonction;
        if ($this->enFonction === TRUE) {
            echo  "<p class='text-center btn rounded-pill ms-5 pt-3'> $this->marque en fonction </p>";
        } else {
            echo  "<p class='text-center btn rounded-pill ms-5 pt-3'> $this->marque éteindre</p>";
        }
    }
    public function sucre($sucre)
    {
        $this->sucre = $sucre;
        if ($sucre!=0) {

            echo  "<p class='text-center btn rounded-pill ms-5 pt-3'>vous avez $this->sucre sucre avec votre cafe</p> ";
     }
    }

    public function faireDuCafe()
    {
        echo "<p class='text-center btn rounded-pill ms-5 pt-3'>Le café est prêt !</p>";
    }
    public function mettreUneDosette()
    {
         echo "<p class='text-center btn rounded-pill ms-5 pt-3'>Je mets une dosette.</p>";

       
    }
    public function monnayeur($clientargent, $prix)
    {
        $this->prix = $prix;
        $this->clientargent = $clientargent;
        if ($clientargent > $prix) {
            $x = $clientargent - $prix;
            echo "<p class='text-center btn rounded-pill ms-5 pt-3'> $x  euro est votre reste monnaie</p>";
        } else if ($clientargent < $prix) {
            $y = $prix - $clientargent;
            echo "<p class='text-center btn rounded-pill ms-5 pt-3'>il reste à payer $y </p>";
        } else if ($clientargent === $prix) {
            echo "<p class='text-center btn rounded-pill ms-5 pt-3'>le prix de café est $this->prix </p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>

