<?php 
include "C:/xampp/htdocs/atelier5/Controller/employerC.php"; 
class showemployer
{

}

$employer3=new employer("achraf","benmouelli","23112003","99810007","benmouelliachraf@gmail.com","23/11/2003");
var_dump($employer3);
$employerS=new employerC();
$employerS->show($employer3);
?>