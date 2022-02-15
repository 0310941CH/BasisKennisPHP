<?php

$naam = readline("Wat is je naam: ");
$achternaam = readline("Wat is je achternaam (inclusied tussenvoegsel): ");
$adres = readline("Wat is je adres: ");
$post = readline("Wat is je postcode: ");
$plaats = readline("Wat is je woonplaats: ");
$leeftijd = (int)readline("Wat is je leeftijd: ");

echo "------------------------------------------------------------" . PHP_EOL;

echo "Jij bent $naam $achternaam." . PHP_EOL;
echo "Je woont in $adres." . PHP_EOL;
echo "In $post $plaats." . PHP_EOL;
echo "je bent $leeftijd jaar oud." . PHP_EOL;