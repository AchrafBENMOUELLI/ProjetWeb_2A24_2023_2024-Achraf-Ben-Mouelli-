<!DOCTYPE html>
<html>
    <body>
        <form id="inscription" action="verification.php" method="post">
            <label for="nom">Nom : </label>
            <input type="text" id="nom" name="nom">
            <br><br>
            
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom">
            <br><br>
            
            <label for="email">Email : </label>
            <input type="text" id="email" name="email">
            <br><br>
            
            <label for="telephone">Téléphone : </label>
            <input type="tel" id="telephone" name="telephone">
            <br><br>
            
            <label for="ddn">Date de naissance : </label>
            <input type="date" id="ddn" name="ddn">
            <br><br>
            
            <label for="password">Mot de passe : </label>
            <input type="password" id="password" name="password">
            <br><br>
            
            <button id="envoyer" type="submit">Envoyer</button>
            <br><br>
            <button id="annuler" type="reset">Annuler</button>
        </form>
    </body>
