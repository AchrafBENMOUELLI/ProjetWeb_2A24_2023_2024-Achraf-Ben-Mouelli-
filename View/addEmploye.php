<?php 
include "C:/xampp/htdocs/atelier5/Controller/employerC.php";
?>
<!DOCTYPE html>
<html>
    <body>
        <form id="inscription" action="addemploye1.php" method="post">
            <section align="center">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom1">
            <br><br>
            
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom1">
            <br><br>
            
            <label for="email">Email : </label>
            <input type="text" id="email" name="email1">
            <br><br>
            
            <label for="telephone">Téléphone : </label>
            <input type="tel" id="telephone" name="telephone1">
            <br><br>
            
            <label for="ddn">Date de naissance : </label>
            <input type="date" id="ddn" name="ddn1">
            <br><br>
            
            <label for="password">Mot de passe : </label>
            <input type="password" id="password" name="password1">
            <br><br>
            <button id="envoyer" type="submit">ajouter</button>
            <br><br>
            <button id="annuler" type="reset">Annuler</button>
            </section>
        </form>
    </body>