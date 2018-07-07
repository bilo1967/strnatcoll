<?php

include_once 'strnatcoll.php';

$locale = "it_IT.utf8";

$array = array(
  "prova 4", "blood", "ético", "bacíle", "straziato", "calo", "Camera",
  "Canal", "Concatenacion", "bacillo", "Cliente", "prova 211", "Calò",
  "etico", "Strain", "strasse", "Concatenación", "Prova 31", "Cámara",
  "Calidad", "1", "913", "313", "", " ", "Straße", "pesca", "pésca",
  "pescare", "canál", "bacile", "blöd", 39);

// Switch to a locale with accents
$oldLocale=setlocale(LC_ALL, 0);
setlocale(LC_COLLATE, $locale);

// Test using strnatcmp
echo "\nstrnatcmp\n";
usort($array, 'strnatcmp');
print_r($array);

// Test using strcoll
echo "\nstrcoll\n";
usort($array, 'strcoll');
print_r($array);

// Test using strnatcoll
echo "\nstrnatcoll\n";
usort($array, 'strnatcoll');
print_r($array);

// Back to previous locale
setlocale(LC_COLLATE, $oldLocale);
?>
