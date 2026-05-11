<?php
/*
Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera. */

declare(strict_types=1);

$studentGrades =[
    "Anna"  => [7, 8, 9, 6, 8],
    "Joan"  => [5, 6, 7, 5, 6],
    "Maria" => [9, 9, 10, 8, 9],
    "Pau"   => [4, 5, 6, 5, 4]
];


function calculateAvgGrade (array $studentGrades): void {
    $sumAvg = 0;
    $numStudents = count($studentGrades);

    foreach ($studentGrades as $name => $grades) {
        $avg = array_sum($grades) / count($grades);
        echo "$name te una mitjana de: $avg <br>";
        $sumAvg += $avg;
    }

    $classAvg = $sumAvg / $numStudents;

    echo "Mitjana de la classe: $classAvg ";
}

calculateAvgGrade($studentGrades);

?> 