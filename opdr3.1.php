<?php

// alle informatie over naam van persoon
$naam = readline("naam: "); /* voer je naam in */
$tussenvoegsel = readline("tussenvoegsel (optioneel): "); /* voer je tussenvoegsel in (als je die hebt) */
$achternaam = readline("achternaam: "); /* voer je achternaam in */

// Telt hoeveel letters(incl spatie) erin zitten min de aantal spaties //
$naam_lengte = strlen($naam) - substr_count($naam, ' ');
$tussenvoegsel_lengte = strlen($tussenvoegsel) - substr_count($tussenvoegsel, ' ');
$achternaam_lengte = strlen($achternaam) - substr_count($achternaam, ' ');

echo $naam_lengte + $tussenvoegsel_lengte + $achternaam_lengte; /* doet alle aantallen bij elkaar */