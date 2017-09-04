<?php

/*

Domaine 1 : Organisation de l’activité
	Sous domaine 1 : Développement et acquisition de compétences
	Sous domaine 2 : Planification, attribution et suivi de l’activité
	Sous domaine 3 : Production d’une communication  de qualité (écrite et orale)

Domaine 2 : Efficacité personnelle
	Sous domaine 1 : Créativité / Innovation
	Sous domaine 2 : Organisation personnelle
	Sous domaine 3 : Adaptabilité / Flexibilité

Domaine 3 : Animation d’équipe
	Sous domaine 1 : Résolution de problème / Prise de décision
	Sous domaine 2 : Leadership
	Sous domaine 3 : Gestion de conflits

Domaine 4 : Management de son environnement
	Sous domaine 1 : Pilotage de projets
	Sous domaine 2 : Gestion de réseaux et de partenariats
	Sous domaine 3 : Relations clients internes / externes
    
*/


$comp = 0;
$plan = 0;
$comm = 0;
    
$crea = 0;
$orga = 0;
$flex = 0;
    
$reso = 0;
$lead = 0;
$conf = 0;

$proj = 0;
$part = 0;
$clie = 0;


$repA = array(
    05, 15, 10, 15, 10, 05, 00, 05, 10, 10, 00, 10, 10, 05, 05, 10, 05, 00, 00, 10, 00, 10, 05, 05, 10, 05, 10, 10, 00, 15, 00, 10, 05, 00);
$repB = array(
    00, 00, 05, 05, 05, 10, 05, 10, 15, 15, 10, 15, 05, 00, 00, 05, 10, 05, 05, 05, 10, 15, 15, 10, 00, 10, 00, 15, 05, 00, 10, 15, 10, 10);
$repC = array(
    15, 10, 15, 10, 00, 15, 10, 15, 05, 00, 15, 05, 15, 10, 10, 15, 00, 15, 10, 15, 15, 05, 00, 15, 05, 15, 15, 05, 10, 05, 15, 05, 00, 15);
$repD = array(
    10, 05, 00, 00, 15, 00, 15, 00, 00, 05, 05, 00, 00, 15, 15, 00, 15, 10, 15, 00, 05, 00, 10, 00, 15, 00, 05, 00, 15, 10, 05, 00, 15, 05);


$i = 1;

while ($i <= 34) {
    
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
    
    
    if ($i == 1 OR $i == 2 OR $i == 8 OR $i == 9 OR $i == 10) $comp = $comp + $rep;
    if ($i == 3 OR $i == 7 OR $i == 11 OR $i == 19) $plan = $plan + $rep;
    if ($i == 20 OR $i == 21) $comm = $comm + $rep;
    
    if ($i == 13 OR $i == 22) $crea = $crea + $rep;
    if ($i == 14 OR $i == 15) $orga = $orga + $rep;
    if ($i == 25 OR $i == 26 OR $i == 27) $flex = $flex + $rep;
    
    if ($i == 4 OR $i == 5 OR $i == 6) $reso = $reso + $rep;
    if ($i == 18 OR $i == 23 OR $i == 24) $lead = $lead + $rep;
    if ($i == 16 OR $i == 17) $conf = $conf + $rep;
    
    if ($i == 12 OR $i == 28 OR $i == 29) $proj = $proj + $rep;
    if ($i == 30 OR $i == 33) $part = $part + $rep;
    if ($i == 31 OR $i == 32 OR $i == 34) $clie = $clie + $rep;
    
        
    $i++;
    
}


$comp = round($comp / (5 * 15) * 100, 0);
$plan = round($plan / (4 * 20) * 100, 0);
$comm = round($comm / (2 * 15) * 100, 0);

$crea = round($crea / (2 * 15) * 100, 0);
$orga = round($orga / (2 * 15) * 100, 0);
$flex = round($flex / (3 * 15) * 100, 0);

$reso = round($reso / (3 * 15) * 100, 0);
$lead = round($lead / (3 * 15) * 100, 0);
$conf = round($conf / (2 * 15) * 100, 0);

$proj = round($proj / (3 * 15) * 100, 0);
$part = round($part / (2 * 15) * 100, 0);
$clie = round($clie / (3 * 15) * 100, 0);
    
$axe1 = round(($comp + $plan + $comm)/3, 0);
$axe2 = round(($crea + $orga + $flex)/3, 0);
$axe3 = round(($reso + $part + $clie)/3, 0);
$axe4 = round(($proj + $part + $clie)/3, 0);


function Colore($scoreRef) {
		if($scoreRef >= 67) {
			echo 'success';
		} elseif ($scoreRef >= 33) {
			echo 'warning';
		} else {
			echo 'danger';
		}
	}

