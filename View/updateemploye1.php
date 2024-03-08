<?php 
include "C:/xampp/htdocs/atelier5/Controller/employerC.php";
$lastname2 = isset($_POST["nom2"]) ?$_POST["nom2"]:'erreur';
$firstname2 = isset($_POST["prenom2"])?$_POST["prenom2"]:'erreur';
$email2 = isset($_POST["email2"])?$_POST["email2"]:'erreur';
$phone2 = isset($_POST["telephone2"])?$_POST["telephone2"]:'erreur';
$dob2 = isset($_POST["ddn2"])?$_POST["ddn2"]:'erreur';
$password2 = isset($_POST["password2"])?$_POST["password2"]:'erreur';

$employerupdate=new employerC();
$employerupdate->update($_POST["id3"],$lastname2, $firstname2, $password2, $phone2, $email2, $dob2);

header('Location:listemployes.php');
?>