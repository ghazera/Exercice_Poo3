<?php
//Import des classes dans l'ordre de priorité
include_once 'film.php';

include_once 'seance.php';
include_once 'BilletPleinTarif.php';

include_once 'BilletEnfant.php';
include_once 'BilletReduit.php';


// Création film & séance
$film = new Film("Dunesday");
$seance = new Seance("16 Décembre 2026","20h30",$film);

// Création des billets
$billetAdulte = new BilletPleinTarif(12, 23.5, $seance);
$billetEnfant = new BilletEnfant(11, 5.0, $seance);
$billetEtudiant = new BilletReduit(42, 23.5, $seance);

// Billet Adulte
echo "Prix : ".$billetAdulte->calculerPrix()." €<br>";
$billetAdulte->imprimerDetail();

// Billet Enfant
echo "Prix enfant : ".$billetEnfant->calculerPrix(9)."€<br>";
$billetEnfant->imprimerDetail();

//Billet Étudiant
echo "Prix étudiant : ".$billetEtudiant->calculerPrix("carte étudiante")." €<br>";
$billetEtudiant->imprimerDetail();

