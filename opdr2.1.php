<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 2</title>
    <style>
    </style>
</head>

<body>
    <?php

    echo "Voer je gewicht in hele kilo's in." . PHP_EOL;
    $inputWeight = readline();

    echo "Voer je lengte in met 1 decimaal. Voorbeeld 1.8 voor 1 meter 80" . PHP_EOL;
    $inputHeight = readline();

    $result = ($inputWeight / $inputHeight) / $inputHeight; // Gewicht gedeeld door lengte en dat nogmaals door de lengte delen

    echo $result;
    ?>
</body>

</html>