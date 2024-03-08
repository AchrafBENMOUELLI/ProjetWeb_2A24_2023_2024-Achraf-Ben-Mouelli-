<?php
include "C:/xampp/htdocs/atelier5/Controller/employerC.php";
// Récupérer les données du formulaire
$lastname = isset($_POST["nom1"]) ?$_POST["nom1"]:'erreur';
$firstname = isset($_POST["prenom1"])?$_POST["prenom1"]:'erreur';
$email = isset($_POST["email1"])?$_POST["email1"]:'erreur';
$phone = isset($_POST["telephone1"])?$_POST["telephone1"]:'erreur';
$dob = isset($_POST["ddn1"])?$_POST["ddn1"]:'erreur';
$password = isset($_POST["password1"])?$_POST["password1"]:'erreur';

// Créer un nouvel objet employer avec les données du formulaire
$employe = new employer($lastname, $firstname, $password, $phone, $email, $dob);
$employeC1 = new employerC();
$employeC1->addemploye($employe);

header('Location:listemployes.php'); 
?>