<?php
$test=false; 
$name=$_GET['name'];
$prenom=$_GET['Prénom'];
$email=$_GET['Email'];
$tel=$_GET['Telephone'];
$adresse=$_GET['Adresse'];
$codep=$_GET['CodePostal']; 
foreach($_GET as $values)
{
    if(empty($values))
    {
        $test = true;
    }
}
if($test)
    {
        echo "champ manquant";
    }
else
{
?>
<!DOCTYPE html>
<html>
    <body>
        <table>
            <tr>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>ADRESSE</th>
                <th>CODE POSTAL</th>
            </tr>
            <tr>
                <td><?php echo isset($name) ? $name :'erreur' ?></td>
                <td><?php echo isset($prenom) ? $prenom : 'erreur' ?></td>
                <td><?php echo isset($email) ? $email : 'erreur'  ?></td>
                <td><?php echo isset($tel)? $tel : 'erreur'  ?></td>
                <td><?php echo isset($adresse)? $adresse : 'erreur'  ?></td>
                <td><?php echo isset($codep)? $codep : 'erreur' ?></td>
            </tr>
        </table>
    </body>
</html>
<?php } ?>