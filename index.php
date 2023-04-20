<h1>Exercice Livre</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires 
et leurs comptes bancaires respectifs</p>

<h2>Résultat</h2>


<?PHP
include ('titulaire.php');
include ('compteBanquaire.php');

$King = new Titulaire("Stephen","King","1950-05-16","New-York");
$compteCourantKing = new compteBanque("compteCourant",2000,"dollar",$King);
$livretAKing = new compteBanque("LivretA",250,"dollar",$King);

echo $King;

?>