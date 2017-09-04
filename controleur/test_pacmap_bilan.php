<?php

// connecté à la table résultats via liste_reponses


$ab = 0;
$ai = 0;
$af = 0;
$as = 0;
    
$mo = 0;
$ar = 0;
$an = 0;
$gc = 0;
    
$pa = 0;
$pl = 0;
$ip = 0;
$tb = 0;

$mg = 0;
$co = 0;
$pd = 0;
$rp = 0;



$repA = array(00, 05, 00, 05, 00, 05, 00, 10, 10, 05, 10, 05, 10, 00, 00, 05, 10, 15, 00, 15, 15, 15, 15, 05, 00, 00, 05, 10, 10, 10, 05, 00);
$repB = array(15, 00, 10, 00, 10, 10, 10, 05, 15, 10, 15, 00, 15, 05, 10, 15, 15, 10, 05, 10, 05, 10, 10, 15, 10, 05, 15, 15, 05, 15, 00, 10);
$repC = array(10, 10, 15, 15, 15, 00, 05, 00, 05, 15, 05, 10, 05, 15, 05, 00, 05, 05, 15, 05, 10, 05, 05, 00, 15, 15, 10, 05, 15, 05, 10, 15);
$repD = array(05, 15, 05, 10, 05, 15, 15, 15, 00, 00, 00, 15, 00, 10, 15, 10, 00, 00, 10, 00, 00, 00, 00, 10, 05, 10, 00, 00, 00, 00, 15, 05);



$i = 1;

while ($i <= 32) {
    if ($resultats[$i]->getReponse() == 'A') {
        $rep = $repA[$i - 1];
    };
    
    if ($resultats[$i]->getReponse() == 'B') {
        $rep = $repB[$i - 1];
    };
    
    if ($resultats[$i]->getReponse() == 'C') {
        $rep = $repC[$i - 1];
    };
    
    if ($resultats[$i]->getReponse() == 'D') {
        $rep = $repD[$i - 1];
    };
    
    
    if ($i == 1 OR $i == 2) $ab = $ab + $rep;
    if ($i == 3 OR $i == 4) $ai = $ai + $rep;
    if ($i == 5 OR $i == 6) $af = $af + $rep;
    if ($i == 7 OR $i == 8) $as = $as + $rep;
    
    if ($i == 9 OR $i == 10) $mo = $mo + $rep;
    if ($i == 11 OR $i == 12) $ar = $ar + $rep;
    if ($i == 13 OR $i == 14) $an = $an + $rep;
    if ($i == 15 OR $i == 16) $gc = $gc + $rep;
    
    if ($i == 17 OR $i == 18) $pa = $pa + $rep;
    if ($i == 19 OR $i == 20) $pl = $pl + $rep;
    if ($i == 21 OR $i == 22) $ip = $ip + $rep;
    if ($i == 23 OR $i == 24) $tb = $tb + $rep;
    
    if ($i == 25 OR $i == 26) $mg = $mg + $rep;
    if ($i == 27 OR $i == 28) $co = $co + $rep;
    if ($i == 29 OR $i == 30) $pd = $pd + $rep;
    if ($i == 31 OR $i == 32) $rp = $rp + $rep;
    
        
    $i++;
}


  $ab = round($ab / 30 * 100, 0);
  $ai = round($ai / 30 * 100, 0);
  $af = round($af / 30 * 100, 0);
  $as = round($as / 30 * 100, 0);
    
   $mo = round($mo / 30 * 100, 0);
    $ar = round($ar / 30 * 100, 0);
    $an = round($an / 30 * 100, 0);
    $gc = round($gc / 30 * 100, 0);
    
    $pa = round($pa / 30 * 100, 0);
    $pl = round($pl / 30 * 100, 0);
    $ip = round($ip / 30 * 100, 0);
    $tb = round($tb / 30 * 100, 0);
    
    $mg = round($mg / 30 * 100, 0);
    $co = round($co / 30 * 100, 0);
    $pd = round($pd / 30 * 100, 0);
    $rp = round($rp / 30 * 100, 0);
    
$axe1 = round(($ab + $ai + $af + $as)/4, 0);
$axe2 = round(($mo + $ar + $an + $gc)/4, 0);
$axe3 = round(($pa + $pl + $ip + $tb)/4, 0);
$axe4 = round(($mg + $co + $pd + $rp)/4, 0);


function Colore($scoreRef) {
		if($scoreRef >= 67) {
			echo 'success';
		} elseif ($scoreRef >= 33) {
			echo 'warning';
		} else {
			echo 'danger';
		}
	}

