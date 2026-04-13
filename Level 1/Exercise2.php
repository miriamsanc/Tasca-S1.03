<?php
/*
Fes un programa que tingui un array indexat de 6 elements i després:

Mostri per pantalla la mida de l’array anterior.
Elimini un element de l’array anterior. Comprova que els índexs/claus de l'array estiguin normalitzats(s’han de reorganitzar els seus índexs perquè no hi hagin salts entre índexs).
Mostri per última vegada la mida de l’array i el seu contingut.
*/

$fruits = array('Apple', 'Pear', 'Kiwi', 'Orange','Cherry', 'Banana');

echo count($fruits) . "<br>";

unset($fruits[2]);

$fruits = array_values($fruits);

echo count($fruits) . "<br>";

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

?>