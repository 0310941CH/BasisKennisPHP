<?php

$start = hrtime(true); /* Start de timer */

$naam = readline("wat is je naam: "); /* voer je naam in */
$age = readline("wat is je leeftijd: "); /* voer je leeftijd in */

$end = hrtime(true); /* stop de timer (ik weet dat het niet nodig is) */

// laat je tijd zien
echo "je deed er " . ($end - $start) / 1000000000 . " seconden over";
