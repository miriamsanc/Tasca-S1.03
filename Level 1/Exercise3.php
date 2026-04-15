<?php
/*
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

function checkCharacterInsideWords(array $words, string $char): bool {
    foreach ($words as $word){
        if(stripos($word, $char)=== false){
            return false;
        }
    }
    return true;
}

//Testing
$words = ["Hola", "Php", "Html"];

$wordstoString = implode(", ", $words);

echo "En el listado [$wordstoString] todas las palabras contienen la letra H?";

var_dump(checkCharacterInsideWords($words, "H"));

echo "<br>";

echo "En el listado [$wordstoString] todas las palabras contienen la letra l?"; 

var_dump(checkCharacterInsideWords($words, "l")); 


?>