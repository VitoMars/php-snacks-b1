<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = [
   [
      "squadraCasa" => "Olimpia Milano",
      "squadraOspite" => "Cantù",
      "puntiCasa" => rand(1, 100),
      "puntiOspite" => rand(1, 100),
   ],
   [
      "squadraCasa" => "Virtus Bologna",
      "squadraOspite" => "Varese",
      "puntiCasa" => rand(1, 100),
      "puntiOspite" => rand(1, 100),
   ],
   [
      "squadraCasa" => "Reyer Venezia",
      "squadraOspite" => " Fortitudo Bologna",
      "puntiCasa" => rand(1, 100),
      "puntiOspite" => rand(1, 100),
   ],
];

for ($i = 0; $i < count($partite); $i++) {
   echo "<h1>" . $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | "
      . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] . "</h1>";
}
?>