<?php

/*
Visionnaire
Motivateur
Analyste
Maître de tâches
*/

$vi = 0;
$mo = 0;
$an = 0;
$mt = 0;



/*
A. Tout à fait d'accord
B. Plutôt d'accord
C. Pas vraiment d'accord
D. Pas du tout d'accord
*/

$repA = array(3, 3, 3, 3, 3, 3, 3, 3, 3, 0, 3, 3, 3, 3, 3, 3, 6,);
$repB = array(2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 2, 2, 2, 2, 2, 2, 6,);
$repC = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 6,);
$repD = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 6,);


$i = 1;

while ($i <= 17) {
    
    if ($resultats[$i]->getReponse() == 'A') {
        $rep = $repA[$i - 1];
    }
    
    if ($resultats[$i]->getReponse() == 'B') {
        $rep = $repB[$i - 1];
    }
    
    if ($resultats[$i]->getReponse() == 'C') {
        $rep = $repC[$i - 1];
    }
    
    if ($resultats[$i]->getReponse() == 'D') {
        $rep = $repD[$i - 1];
    }
    
    
    if ($i == 1 OR $i == 6 OR $i == 8 OR $i == 13) $vi = $vi + $rep;
    if ($i == 4 OR $i == 5 OR $i == 7 OR $i == 15) $mo = $mo + $rep;
    if ($i == 9 OR $i == 12 OR $i == 14 OR $i == 16) $an = $an + $rep;
    if ($i == 2 OR $i == 3 OR $i == 10 OR $i == 11) $mt = $mt + $rep;
    
    if ($i == 17) {
        
        if ($resultats[$i]->getReponse() == 'A') {
            $mo = $mo + $rep;
        }

        if ($resultats[$i]->getReponse() == 'B') {
            $vi = $vi + $rep;
        }

        if ($resultats[$i]->getReponse() == 'C') {
            $an = $an + $rep;
        }

        if ($resultats[$i]->getReponse() == 'D') {
            $mt = $mt + $rep;
        }  
        
    }
        
    $i++;
    
}