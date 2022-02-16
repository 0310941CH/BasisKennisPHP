<?php

$name = readline("Wat is je naam: ");
$birthDate = readline("Wat is je geboorte datum (2/22/2022): "); /* Vraagt om je geboorte datum. */
$birthDate = explode("/", $birthDate); /* Explode de "/" zodat je de Dagen, Maanden en Jaren apart hebt. */

// (vv hieronder vv) Gaat berekenen wat de Dagen, Maanden en Jaren zijn en op die manier gaan we de leeftijd berekenen.
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
? ((date("Y") - $birthDate[2]) - 1)
: (date("Y") - $birthDate[2]));

echo "$name is $age jaar oud";
