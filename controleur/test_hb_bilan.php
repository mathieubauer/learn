<?php

$s1 = 0;
$s2 = 0;
$s3 = 0;
$s4 = 0;
$adeq = 0;

// Styles

$repA = array(
    'S1',    'S1',    'S1',    'S4',    'S2',    
    'S1',    'S3',    'S3',    'S3',    'S4',    
    'S4',    'S1',    'S4',    'S3',    'S1',    
    'S4',    'S3',    'S2',    'S3',    'S2');

$repB = array(
    'S4',    'S3',    'S2',    'S2',    'S4',    
    'S4',    'S1',    'S2',    'S2',    'S1',    
    'S1',    'S3',    'S1',    'S2',    'S3',    
    'S1',    'S1',    'S1',    'S2',    'S4');

$repC = array(
    'S2',    'S2',    'S3',    'S1',    'S3',    
    'S2',    'S4',    'S1',    'S4',    'S2',    
    'S2',    'S2',    'S2',    'S4',    'S2',    
    'S3',    'S4',    'S3',    'S4',    'S3');

$repD = array(
    'S3',    'S4',    'S4',    'S3',    'S1',    
    'S3',    'S2',    'S4',    'S1',    'S3',    
    'S3',    'S4',    'S3',    'S1',    'S4',    
    'S2',    'S2',    'S4',    'S1',    'S1');


// Adéquation

$repAdeqA = array(
    2,    4,    3,    1,    3,
    1,    2,    4,    3,    1,
    4,    1,    1,    4,    1,
    4,    3,    3,    2,    4,);

$repAdeqB = array(
    1,    2,    4,    3,    2,
    3,    4,    2,    2,    2,
    1,    4,    4,    2,    3,
    1,    1,    4,    4,    1,);

$repAdeqC = array(
    4,    3,    2,    4,    4,
    2,    1,    1,    4,    4,
    2,    2,    3,    3,    2,
    3,    4,    2,    1,    2,);

$repAdeqD = array(
    3,    1,    1,    2,    1,
    4,    3,    3,    1,    3,
    3,    3,    2,    1,    4,
    2,    2,    1,    3,    3,);


$i = 1;
while ($i <= 20) {
    if ($resultats[$i]->getReponse() == 'A') {
        $rep = $repA[$i - 1];
        $repAdeq = $repAdeqA[$i - 1];
    };
    
    if ($resultats[$i]->getReponse() == 'B') {
        $rep = $repB[$i - 1];
        $repAdeq = $repAdeqB[$i - 1];
    };
    
    if ($resultats[$i]->getReponse() == 'C') {
        $rep = $repC[$i - 1];
        $repAdeq = $repAdeqC[$i - 1];
    };
    
    if ($resultats[$i]->getReponse() == 'D') {
        $rep = $repD[$i - 1];
        $repAdeq = $repAdeqD[$i - 1];
    };
    
    if ($rep == 'S1') $s1 = $s1 + 1;
    if ($rep == 'S2') $s2 = $s2 + 1;
    if ($rep == 'S3') $s3 = $s3 + 1;
    if ($rep == 'S4') $s4 = $s4 + 1;
    
    $adeq = $adeq + $repAdeq;
    
    $i++;
}

$flex = 30 - (abs($s1 - 5) + abs($s2 - 5) + abs($s3 - 5) + abs($s4 - 5));