<?php
/*
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
  Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema.
  Olimpia Milano - Cantù | 55-60
*/

$matches = [
  [
    "casa" => "Varese",
    "ospite" => "Juventus",
    "casaPunti" => 33,
    "ospitePunti" => 44
  ],
  [
    "casa" => "Olimpia",
    "ospite" => "Milano",
    "casaPunti" => 55,
    "ospitePunti" => 60
  ]
];
var_dump($matches);
echo $matches["casa"] . " " . $matches["ospite"] . " | " . $matches["casaPunti"] . " - " . $matches["ospitePunti"];
