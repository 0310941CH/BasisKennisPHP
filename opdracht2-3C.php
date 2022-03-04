<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leeftijd</title>
</head>
<body>
    <form method="post">
    <input type="text" id="name" name="name">
    <label for="name">Naam</label> <br>
    <input type="date" id="birthday" name="birthday">
    <label for="date">Geboortedatum</label><br>
    <input type="submit" value="verzenden" name="verzenden">
    </form>

    <?php
      $Currentdate = date("Y-m-d"); // huidige datum

    if (isset($_POST["name"])) {
        if (isset($_POST["birthday"])) {
            $calculate = strtotime($Currentdate) - strtotime($_POST["birthday"]); // de huidige datum - de geboorte datum in Unix timestamp (seconden)
            $age = $calculate / 60 / 60 / 24 / 365; // seconden tot aan jaar
            $firstName = $_POST["name"];
            echo $firstName . " is " . floor($age) . " jaar oud."; // floor age voor het correcte aantal jaren zonder komma
        }
    }
    ?>
    
</body>
</html>

<?php
