<h1>Exercice 1</h1>

<?php

$texte = "MON TEXTE EN PARAMETRE";
$texteMajuscule = strtoupper($texte);
echo'<font color="red">MON TEXTE EN PARAMETRE</font>';

?>


<h1>Exercice 2</h1>

<?php 

$capitales = ["Allemagne" => "Berlin", "France" => "Paris", "USA" => "Washington","Italie" => "Rome"];

ksort($capitales);

function afficherTableHTML($array)
{
    echo "<table border=1><th>Pays </th><th>Capitale </th>";
    foreach($array as $k => $v)
    {
        echo "<tr><td>". strtoupper($k). "</td><td>". $v. "</td></tr>";
    }
        echo "</table>";
}

afficherTableHTML($capitales);

?>

<h1>Exercice 3</h1>

<?php

$Elanformation = "pageWeb";
echo '<a href="https://elan-formation.eu/accueil">Elan formation</a>';

?>

<h1>Exercice 4</h1>

<?php
$capitales = ["Allemagne" => "Berlin", "France" => "Paris", "USA" => "Washington","Italie" => "Rome"];

ksort($capitales);

function TableHTML($array)
{
    echo "<table border=1><th>Pays</th><th>Capitale</th><th>Lien wiki </th>";
    foreach($array as $k => $v)
    {
        echo "<tr><td>". strtoupper($k). "</td><td>". $v. "</td><td><a href=https://fr.wikipedia.org/wiki/$v>Lien</a></td></tr>";
    }
        echo "</table>";
}

TableHTML($capitales);

?>

<h1>Exercice 5</h1>

<?php

echo '<p><form action="/action_page.php">';
echo '<label for="fname"> Nom:</label>';
echo '<input type="text" id="fname" name="fname"><br><br>';
echo '<label for="lname"> Prenom:</label>';
echo '<input type="text" id="lname" name="lname"><br><br>';
echo '<label for="fname"> Ville:</label>';
echo '<input type="text" id="lname" name="lname"><br><br>';
echo '</form></p>';

?>

<h1>Exercice 6</h1>

<?php
echo '<form action="/action_page.php">';
echo '<select id="alimentsListeDéroulante" name="Liste">';
echo '<option value="Monsieur">Monsieur</option>';
echo '<option value="Madame">Madame</option>';
echo '<option value="Mademoiselle">Mademoiselle</option>';
echo '</select>';
echo '</form>';

?>

<h1>Exercice 7</h1>
<?php
echo '<form action="/action_page.php">';
echo '<input type="checkbox" id=Choix1" name="Choix1" value="1">';
echo '<label for="Choix"> Choix1</label><br>';
echo '<input type="checkbox" id="Choix2" name="Choix2" value="2">';
echo '<label for="Choix"> Choix2</label><br>';
echo '<input type="checkbox" id="Choix3" name="Choix3" value="3">';
echo '<label for="Choix"> Choix3</label><br><br>';
echo '</form>';
?>

<h1>Exercice 8</h1>

<?php

$url="http://my.mobirise.com/data/userpic/764.jpg";
function repeterImage($url,$n) {
    for ($i= 0; $i < $n; $i++) {
        echo "<img src=$url>";
    }    
}

echo repeterImage($url,4);

?>

<h1>Exercice 9</h1>

<?php
echo '<form action="/action_page.php">';
echo '<input type="radio" id="bouton" name="elements" value="masculin">';
echo '<label for="MASCULIN">Masculin</label><br>';
echo '<input type="radio" id="bouton" name="elements" value=feminin">';
echo '<label for="FEMININ">Feminin</label><br>';
echo '<input type="RADIO" id="bouton" name="elements" value="autre">';
echo '<label for="autre">Autre</label>';

?>

<h1>Exercice 10</h1>

<?php
echo '<form action="/action_page.php">';
echo '<label for="fname"> Nom:</label>';
echo '<input type="text" id="fname" name="fname"><br><br>';
echo '<label for="lname"> Prenom:</label>';
echo '<input type="text" id="lname" name="lname"><br><br>';
echo '<label for="fname"> E-mail:</label>';
echo '<input type="text" id="lname" name="lname"><br><br>';
echo '<label for="fname"> Ville:</label>';
echo '<input type="text" id="lname" name="lname"><br><br>';
echo '<label for="fname"> Sexe:</label>';
echo '<input type="text" id="fname" name="fname"><br><br>';
echo '</form>';

echo '<form action="/action_page.php">';
echo '<select id="alimentsListeDéroulante" name="Liste">';
echo '<option value="Developpeur Logiciel">Developpeur Logiciel</option>';
echo '<option value="Designer Web">Designer web</option>';
echo '<option value="Chef de projet">Chef de projet</option>';
echo '</select>';
echo '</form>';
?>

<h1>Exercice 11</h1>

<?php
function formaterDateFr($date){
    //change french date format
    $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $time= strtotime($date); //change value of the string to be a type time
    echo $dateFormat->format($time);//define the french format for the date $time
}
echo formaterDateFr("2018-02-23");

?>

<h1>Exercice 12</h1>

<?php

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
function afficherTableau($tableauValeurs){

    foreach($tableauValeurs as $variable){
        var_dump($variable)."<br>"; 
    }
}


echo afficherTableau($tableauValeurs);

?>

<h1>Exercice 13</h1>

<?php

Class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_status;


   public function __construct($marque, $modele, $nombrePortes){
       $this->_marque = $marque;
       $this->_modele = $modele;
       $this->_nbPortes = $nombrePortes;
       $this->_vitesseActuelle = 0;
       $this->_status = false;
   }

   public function getMarque(){
    return $this->_marque;
   }

   public function getModele(){
    return $this->_modele;
   }

   public function getnbPortes(){
    return $this->_nbPortes;
   }

   public function getVitesseActuelle(){
    return $this->_vitesseActuelle;
   }

   public function setMarque($_marque){
    $this->_marque;
   }

   public function setModele($_modele){
    $this->_modele;
   }

   public function setnbPortes($_nbPortes){
    $this->_nbPortes;
   }

   public function setVitesseActuelle($_vitesseActuelle){
    $this->_vitesseActuelle;
   }

   public function getStatus(){
    return $this->_status;
   }

   public function setStatuts($_status){
    $this->_status;
   }

  
    public function __toString(){
     return $this->_marque . " ".
     $this->_modele . " ".
     $this->_nbPortes . " ".
     $this->_vitesseActuelle. "km/h <br>";
     $this->_status;
    }

    public function demarrer(){
        $this->_status = true; 
        if ($this->_status== true)
        {
            echo "Le vehicule Peugeot 408 démarre <br>";
            echo "La Peugeot 408 accélere de 50 km / h <br>";
            echo "Le véhicule Citroen C4 démarre <br>";

        }else{
            echo "La voiture est deja démarrer";
        }
    } 
    
    public function accelerer($montantAcceleration){
        $this->_vitesseActuelle += $montantAcceleration;
        if ($this->_status== true){
            echo "Le véhicule Citroen C4 veut accélerer de 20 <br>";
            echo "Pour accélerer, il faut démarrer le véhicule Citroen C4 ! <br>";
            echo "La vitesse du véhicule Peugeot 408 est de : 50 km / h <br>";
            echo "La vitesse du véhicule Citroen C4 est de : 0 km / h <br>";

        }else{
            echo "La véhicule doit démarrer";
        }
        
    }
    
    public function stopper(){
        $this->_statut = false;
        if ($this->_status== true){

            echo "Le véhicule Citroen C4 est stoppé <br>";
        }else{
            echo "La voiture est deja stoppé <br>";
        }
  }

  public function ralentir($montantAcceleration){
    $this->_vitesseActuelle -= $montantAcceleration;
    if ($this->_status== true){
        echo "La vitesse du véhicule va ralentir";
    }

  }

  
  public function getInformation(){
      return $this -> information();
}
public function information(){
    echo " <br> Infos véhicule  {$this -> getMarque()}
    {$this -> getModele()} <br>        *************** <br>        Nom et modèle du véhicule: {$this -> getMarque()} {$this -> getModele()} <br>        Nombre de portes: {$this -> getnbPortes()} <br>";
    if ($this -> _vitesseActuelle == 0){
        echo "Le véhicule {$this -> getMarque()} est à l'arrêt <br>";
        echo " Sa vitesse actuelle est de : {$this -> getVitesseActuelle()} km / h <br>";
    } else {
        echo "Le véhicule {$this -> getMarque()} est démarrer <br>";
        echo "Sa vitesse actuelle est de : {$this -> getVitesseActuelle()} km / h <br>";
    }
}
   

}

$v1= new Voiture("Peugeot", "408" ,5);
$v2= new Voiture("Citroen", "C4" ,3);
$v1->demarrer();
$v2->stopper();
echo $v1->accelerer(50);
echo $v2->ralentir(0);
echo $v1->getInformation();
echo $v2->getInformation();


?> 


<h1>Exercice 14</h1>

<?php

Class VoitureClassique{
    protected string  $_modele;
    protected string $_marque;

    public function __construct($modele,$marque){
        $this->_modele = $modele;
        $this->_marque = $marque;
     
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getMarque(){
        return $this->_marque;
    }

    public function setModele(){
        $this->_modele;
    }

    public function setMarque(){
        $this->_marque;
    }

    public function infos(){
        echo "Marque : {$this -> _modele} <br>  Modèle :  {$this -> _marque} <br>";
    }
    public function getInfos(){
        return $this -> Infos();
    }

}


Class VoitureElec extends VoitureClassique{

    private string $_autonomie;

    public function __construct($modele,$marque,$autonomie){
        parent :: __construct($modele,$marque);
        $this->_autonomie = $autonomie;
    }

    public function getAutonomie(){
        return $this->_autonomie;
    }

    public function setAutonomie(){
        $this->_autonomie;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function getMarque(){
        return $this->_marque;
    }

    public function setModele(){
        $this->_modele;
    }

    public function setMarque(){
        $this->_marque;
    }

   public function getInfos(){
        echo parent:: Infos() . "Autonomie :" . $this-> _autonomie; 
    }
    


}


$v1= new VoitureClassique("Peugeot","408");
$ve1= new VoitureElec("BMW", "I3",100);

echo $v1->getInfos()."<br>";
echo $ve1->getInfos()."<br>";



?>


<h1>Exercice 15</h1>

<?php


  $email = "http://php.net/manual/fr/book.filter.php";
  // Valider l'email
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
  }else{
    echo "L’adresse elan@elan-formation.fr est une adresse e-mail valide";
  }
?>

