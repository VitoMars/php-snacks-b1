<?php
// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, explicabo perferendis! Provident adipisci inventore ratione quas numquam assumenda, non eveniet alias dolorem asperiores odit beatae accusamus vitae, saepe nisi obcaecati. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, ullam! Repudiandae, sequi excepturi cupiditate corrupti architecto consectetur facilis voluptatibus tempora optio delectus numquam officiis impedit voluptas sapiente explicabo ea dicta! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, explicabo perferendis! Provident adipisci inventore ratione quas numquam assumenda, non eveniet alias dolorem asperiores odit beatae accusamus vitae, saepe nisi obcaecati. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, ullam! Repudiandae, sequi excepturi cupiditate corrupti architecto consectetur facilis voluptatibus tempora optio delectus numquam officiis impedit voluptas sapiente explicabo ea dicta!";

echo $text;

$newText = explode(". ", $text);

var_dump($newText);

foreach ($newText as $paragraph) {
   echo $paragraph;
   echo "<br>";
}
