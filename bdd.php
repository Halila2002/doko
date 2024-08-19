<?php
$serveur = "localhost";
$utilisateur = "u924654367_halela";
$motDePasse = "3hSJAVicQCMEnhh";
$baseDeDonnees ="u924654367_dokotoro";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
} catch(PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
