<?php 

class employer
{
    private $lastname;
    private $fisrtname;
    private $password;
    private $phone;
    private $email;
    private $dOB;

    //constuct par defaut:
    /*public function __construct()
    {
        $this->lastname="";
        $this->firstname="";
        $this->password="";
        $this->phone="";
        $this->email="";
        $this->dOB="";
    }*/

    //Getters:
    public function getlastname()
    {
        return $this->lastname;
    }

    public function getfirstname()
    {
        return $this->firstname;
    }

    public function getpassword()
    {
        return $this->password;
    }

    public function getphone()
    {
        return $this->phone;
    }

    public function getemail()
    {
        return $this->email;
    }

    public function getdOB()
    {
        return $this->dOB;
    }

    //Setters:
    public function setlastname($a)
    {
        $this->lastname=$a;
    }
    public function setfirstname($b)
    {
        $this->firstname=$b;
    }

    public function settpassword($c)
    {
        $this->password=$c;
    }

    public function setphone($d)
    {
        $this->phone=$d;
    }

    public function setemail($e)
    {
        $this->email=$e;
    }

    public function setdOB($f)
    {
        $this->dOB=$f;
    }

    //construct parametrée:
    public function __construct($a,$b,$c,$d,$e,$f)
    {
        $this->lastname="$a";
        $this->firstname="$b";
        $this->password="$c";
        $this->phone="$d";
        $this->email="$e";
        $this->dOB="$f";
    }
    //affichage:
    public function afficher()
    {
        echo "prenom:".$this->lastname;
        echo "nom:".$this->firstname;
        echo "mot de passe:".$this->password;
        echo "telephone:".$this->phone;
        echo "email:".$this->email;
        echo "date de naissance:".$this->dOB;
    }
}
//$personne1=new employer();
$personne2=new employer("achraf","benmouelli","23112003","99810007","benmouelliachraf@gmail.com","23/11/2003");
$personne2->afficher();
?>