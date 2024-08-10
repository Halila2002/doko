<?php
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "";
$baseDeDonnees ="dokotoro";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
} catch(PDOException $e) {
    echo "Échec de la connexion : " . $e->getMessage();
}
?>
