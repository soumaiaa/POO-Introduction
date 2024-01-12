<?php
require_once("./cafe.php");

$machine = new MachineACafe("Senseo");
if (isset($_POST['on'])) {
    $machine->allumage(true);
} else if (isset($_POST['off'])) {
    $machine->allumage(false);
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
            <form action="./On.php" method="post">
                <div class="">
                    <button href="./On.php" type="submit" name="on" class="text-center btn rounded-end-circle">ON<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
                            <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8" />
                        </svg></button>
                </div>
            </form>
        

        </div>
        
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>