<?php

declare(strict_types=1);

$guestsA = ["Juan", "Dani", "Maria", "Luis"];
$guestsB = ["Maria", "David", "Laia", "Luis"];


function guestsInCommon (array $guestsA, array $guestsB): array{
    return array_intersect ($guestsA, $guestsB);
}

function mixWithoutguestsInCommon (array $guestsA, array $guestsB): array {
    return array_unique(array_merge($guestsA, $guestsB));
}


function exclusiveFromGuestsA(array $guestsA, array $guestsB): array {
    return array_diff($guestsA, $guestsB);
}


function exclusiveFromGuestsB(array $guestsA, array $guestsB): array {
    return array_diff($guestsB, $guestsA);
}

function showList(string $titol, array $llista): void {
    echo "$titol: " . implode(" , ", $llista) . "<br>";
}

/*La llista de convidats en comú entre les dues llistes.*/
showList("Convidats en comú", guestsInCommon($guestsA, $guestsB));

/*La mescla de la llista de convidats(sense repeticions).*/
showList("Mescla sense repeticions", mixWithoutguestsInCommon($guestsA, $guestsB));

/*La llista de convidats exclusius de la primera llista. */
showList("Exclusius de la primera llista", exclusiveFromGuestsA($guestsA, $guestsB));

/*La llista de convidats exclusius de la segona llista.*/
showList("Exclusius de la segona llista", exclusiveFromGuestsB($guestsA, $guestsB));



?>