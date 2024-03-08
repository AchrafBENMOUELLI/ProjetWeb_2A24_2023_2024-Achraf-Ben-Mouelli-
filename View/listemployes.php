<?php
include "C:/xampp/htdocs/atelier5/Controller/employerC.php";
 /*// Récupérer les données du formulaire
$lastname = isset($_POST["nom1"]);
$firstname = isset($_POST["prenom1"]);
$email = isset($_POST["email1"]);
$phone = isset($_POST["telephone1"]);
$dob = isset($_POST["ddn1"]);
$password = isset($_POST["password1"]);

// Créer un nouvel objet employer avec les données du formulaire
$employe = new employer($lastname, $firstname, $password, $phone, $email, $dob);
$employeC1 = new employerC();
$employeC1->addemploye($employe);*/


// Appeler la méthode pour ajouter l'employé à la base de données
$db=config::getConnexion(); 
$employeC = new employerC(); 
$list =$employeC->listemploye();



               
 ?>

<html>

<head></head>

<body>

    <center>
        <h1>List of employes</h1>
        <h2>
            <a href="addEmploye.php">Add Employe</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Employe</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $employe) {
        ?>
            <tr>
                <td><?= $employe['id']; ?></td>
                <td><?= $employe['lastname']; ?></td>
                <td><?= $employe['firstname']; ?></td>
                <td><?= $employe['email']; ?></td>
                <td><?= $employe['dob']; ?></td>
                <td align="center">
                    <form method="POST" action="updateEmploye.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $employe['id']; ?> name="id">
                    </form>
                </td>
                <td>
                    <a href="deleteemploye.php?id=<?php echo $employe['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
