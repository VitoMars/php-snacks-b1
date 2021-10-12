<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Includerlo in un file database.php... 
Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.  -->

<?php
include __DIR__ . "/database.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<style>
   .grey {
      width: 150px;
      background-color: grey;
   }

   .green {
      width: 150px;
      background-color: green;
   }
</style>

<body>
   <?php
   foreach ($db as $key => $role) {
      if ($key == "teachers") {
         foreach ($role as $users) {
            echo "<div class='grey'>";
            echo $users["name"] . " " . $users["lastname"];
            echo "</div>";
         }
      } else if ($key == "pm") {
         foreach ($role as $users) {
            echo "<div class='green'>";
            echo $users["name"] . " " . $users["lastname"];
            echo "</div>";
         }
      }
      // if($key == "pm"){

      // }
   }

   ?>
</body>

</html>