<?php
/*
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/

function checkChar($words, $char){
    foreach ($words as $word){
        if(strpos($word, $char)=== false){
            return false;
        }
    }
    return true;
}

//Testing
$words = ["hola", "Php", "html"];

var_dump(checkChar($words, "h")); 
var_dump(checkChar($words, "l")); 

?>