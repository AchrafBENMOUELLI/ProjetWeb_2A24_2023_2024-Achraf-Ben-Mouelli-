<?php 
include "C:/xampp/htdocs/atelier5/Controller/employerC.php";

$id69=$_POST['id'];
?>
<!DOCTYPE html>
<html>
    <body>
        <form id="inscription" action="updateemploye1.php" method="post">
            <section align="center">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom2">
            <br><br>
            
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom2">
            <br><br>
            
            <label for="email">Email : </label>
            <input type="text" id="email" name="email2">
            <br><br>
            
            <label for="telephone">Téléphone : </label>
            <input type="tel" id="telephone" name="telephone2">
            <br><br>
            
            <label for="ddn">Date de naissance : </label>
            <input type="date" id="ddn" name="ddn2">
            <br><br>
            
            <label for="password">Mot de passe : </label>
            <input type="password" id="password" name="password2">
            <br><br>
            <input type="hidden" name="id3" value ="<?php echo $id69; ?>">
            <br><br>
            <button id="envoyer" type="submit">modifier</button>
            <br><br>
            <button id="annuler" type="reset">Annuler</button>
            </section>
        </form>
    </body>


    <?php
       /* //recuperation du modification
        $lastname2 = $_POST["nom2"];
        $firstname2 = $_POST["prenom2"];
        $email2 = $_POST["email2"];
        $phone2 = $_POST["telephone2"];
        $dob2 = $_POST["ddn2"];
        $password2 = $_POST["password2"];

        $employerupdate=new employerC();
        $employerupdate->update($_GET["id"],$lastname2, $firstname2, $password2, $phone2, $email2, $dob2);

        header('Location:listemployes.php');*/
    ?>