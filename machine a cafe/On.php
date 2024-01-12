<?php

require_once("./cafe.php");

$machine = new MachineACafe("Senseo");
if (isset($_POST['on'])) {
    $machine->allumage(true);
} else if (isset($_POST['off'])) {
    $machine->allumage(false);
}

if (isset($_POST['dosette'])) {
    $machine->mettreUneDosette();
}

echo "<br>";
if (isset($_POST['sucres']) && !empty($_POST['sucres'])) {

    $machine->sucre($_POST['sucres']);
} else {
    $machine->sucre(0);
}

echo "<br>";
if (isset($_POST['monnaie']) && !empty($_POST['monnaie'])) {
    $machine->monnayeur($_POST['monnaie'], 2);
}
echo "<br>";
if (isset($_POST['cafe'])) {
$machine->faireDuCafe();
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

<body class="bg">
    <section class="test-center">
        <div class="mt-5 d-flex justify-content-between">
            <form action="" method="post">
                <div class="">
                    <button  class="text-center btn bt rounded-end-circle">ON<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                            <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8" />
                        </svg></button>
                </div>
            </form>
            <form action="./index.php" method="post">
                <div class="">
                    <button href="./index.php" type="submit" name="off" class="text-center btn rounded-start-pill">OFF <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
                            <path d="M11 4a4 4 0 0 1 0 8H8a5 5 0 0 0 2-4 5 5 0 0 0-2-4zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8M0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5" />
                        </svg></button>
                </div>
            </form>

        </div>
        <div class="mt-5 d-flex justify-content-between">
            <form action="" method="post">
                <div class="">
                    <button type="submit" name="dosette" class="text-center btn rounded-end-circle">mettre Une Dosette

                    </button>
                </div>
            </form>
            <form action="" method="post">
                <div class="">
                    <button type="submit" name="prix" class="text-center btn rounded-start-pill">prix de café: 2 euro

                    </button>
                </div>
            </form>
        </div>
        <form action="" method="post">
            <input class="ms-5 btn1" type="number" value="0" name="sucres" min="0" max="10" /><br>
            <div>

                <button type="submit" class="text-center btn rounded-end-circle"> Ajouter des sucres </button>
            </div>
        </form>
        <form action="" method="post">
            <input class="ms-5 btn1" type="number" name="monnaie" value="0" min="0" max="50" /><br>
            <div>

                <button type="submit" class="text-center btn rounded-end-circle"> Deposer les monnaies</button>
            </div>
        </form>
        <form action="" method="post">
        <div class="mt-3">
            <button type="submit" name="cafe" class="text-center btn rounded-end-circle">Prendre votre café

            </button>
        </div>
        </form>

    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>