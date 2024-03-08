<?php
include "C:/xampp/htdocs/atelier5/Model/employer.php";
include "C:/xampp/htdocs/atelier5/config.php";
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
    ///////////////////////////////////////////////
    public function listemploye()
    {
        $sql ="SELECT * FROM employe";
        $db =config::getConnexion();
        try
        {
            $liste =$db->query($sql);
            return $liste;
        }
        catch(Exception $e)
        {
            die('Error:'.$e->getMessage());
        }
    }
    /////////////////////////////////////////////
    public function deleteemploye($id)
    {
        $sql="DELETE  FROM employe WHERE id = :id";
        $db = config::getConnexion();
        try
        {
            $query = $db->prepare($sql);
            $query->bindValue(':id',$id);

            $query->execute();
            $rowCount = $query->rowCount();

            if($rowCount > 0)
            {
                echo "delete successful. $rowCount rows affected.";
            }
            else
            {
                echo "No rows deleted.";
            }
        }
        catch(Exception $e)
        {
            die('Error:' .$e->getMessage());
        }
    }
    /////////////////////////////////////////////
    public function addemploye($employer)
    {
        $pdo = config::getConnexion();
        try {
            $query = $pdo->prepare(
                "INSERT INTO employe (lastname, firstname, password, phone, email, dob)
                VALUES (:lastname, :firstname, :password, :phone, :email, :dob)"
            );
    
            $query->execute([
                'lastname' => $employer->getlastname(),
                'firstname' => $employer->getfirstname(),
                'password' => $employer->getpassword(),
                'phone' => $employer->getphone(),
                'email' => $employer->getemail(),
                'dob' => $employer->getdOB(), 
            ]);
    
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ///////////////////////////////////////////////
    public function update($id2,$lastname2,$firstname2,$password2,$phone2,$email2,$dob2)
    {
        $sql="UPDATE  employe SET lastname=:lname, firstname=:fname, password=:passwo, phone=:ph, email=:eml, dob=:ddn WHERE id=:id5";
        $db = config::getConnexion();
            $query = $db->prepare($sql);
    
            $query->bindValue(':id5',$id2);
            $query->bindValue(':lname',$lastname2);
            $query->bindValue(':fname',$firstname2);
            $query->bindValue(':passwo',$password2);
            $query->bindValue(':ph',$phone2);
            $query->bindValue(':eml',$email2);
            $query->bindValue(':ddn',$dob2);
        try
        {
            $query->execute();
        }
        catch(Exception $e)
        {
            die('Error:' .$e->getMessage());
        }
    }
    ///////////////////////////////////////////////
}
/*$employe1=new employer("achraf","benmouelli","nannoucha2013","99810007","benmouelliachraf@gmail.com","23/11/2003");
$personneC=new employerC();
$personneC->show($employe1);*/
?>