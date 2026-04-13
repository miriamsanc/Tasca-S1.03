<?php
/*
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.
*/

$fruits = array('Apple', 'Pear', 'Kiwi', 'Orange','Cherry');

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}

?>