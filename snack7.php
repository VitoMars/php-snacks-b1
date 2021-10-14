<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
include __DIR__ . "/database.php";

foreach ($alunni as $key => $alunno) {
   echo $key . "<br>";
   echo $alunno;
   foreach ($alunno as $materia => $voto) {
      echo "Media dei voti: " . media($voto) . "<br>";
   };
};

function media($num)
{
   $count = count($num);
   $res = 0;
   foreach ($num as $n) {
      $res += $n;
   }
   return $num / $count;
}
?>