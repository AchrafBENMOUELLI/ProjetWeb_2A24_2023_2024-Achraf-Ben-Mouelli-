<?php
include "C:/xampp/htdocs/atelier5/Model/employer.php";
class employerC
{
    public function show($employe)
    {
        ?>
        <!DOCTYPE html>
        <html>
            <body>
                <table border="5">
                <tr><th>Nom</th><th>Prénom</th><th>Mot de passe</th><th>Numéro de téléphone</th><th>Email</th><th>Date de naissance</th></tr>
                    <tr>
                        <td><?php echo $employe->getlastname(); ?></td>
                        <td><?php echo $employe->getfirstname(); ?></td>
                        <td><?php echo $employe->getpassword(); ?></td>
                        <td><?php echo $employe->getphone(); ?></td>
                        <td><?php echo $employe->getemail(); ?></td>
                        <td><?php echo $employe->getdOB(); ?></td>
                    </tr>
                </table>
            </body>
        </html>
        <?php
    }
}
$employe1=new employer("achraf","benmouelli","23112003","99810007","benmouelliachraf@gmail.com","23/11/2003");
$personneC=new employerC();
$personneC->show($employe1);
?>