<?php
include "C:/xampp/htdocs/atelier5/Controller/employerC.php";


$employeC=new employerC();
$employeC->deleteemploye($_GET["id"]);

header('Location:listemployes.php');

?>