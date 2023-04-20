<?PHP
class Titulaire{
    private string $_nom;
    private string $_prenom;
    private $_dateNaissance;
    private string $_ville;
    private $_compteBanquaire;

    public function __construct($nom,$prenom,$dateNaissance,$ville)
    {
        $this->_nom = $nom ;
        $this->_prenom = $prenom ;
        $this->_dateNaissance = $dateNaissance ;
        $this->_ville = $ville ;
        $this->_compteBanquaire = [];
   
    }

    /*Création des methode getter et setter*/ 
    public function getNom() : string{return $this->_nom;}
    public function setNom(string $Nom){$this->_nom = $Nom;}

    public function getPrenom() : string{return $this->_prenom;}
    public function setPrenom(string $prenom){$this->_prenom = $prenom;}
    
    public function getDateNaissance() : string{return $this->_dateNaissance;}
    public function setDateNaissance(string $dateNaissance){$this->_dateNaissance = $dateNaissance;}

    public function getVille() : string{return $this->_ville;}
    public function setVille(string $ville){$this->_ville = $ville;}
    
    public function getCompteBanquaire() {return $this->_compteBanquaire;}

    /*Calcule l'age de la personne*/ 
    public function calculeAge(){
        $this->_dateNaissance =new DateTime($this->_dateNaissance);
        $now = new DateTime('now');
        $difference = $this->_dateNaissance->diff($now);
        return  $age = $difference->format('%y');
    }

    /*Création de la methode qui ajoute des compte banquaire aux titulaires*/ 
    public function addCompte($compteBanquaire){
        $this->_compteBanquaire[] = $compteBanquaire;
    }
    
    /*Utilisation de fonction toString pour afficher les information du titulaire*/ 
    public function __toString()
    {
        $nbCompte = "";
        foreach($this->_compteBanquaire as $compte){
            $nbCompte = $nbCompte ." - ". $compte->getLibelle() ;
        };

        return "<br> <h2> Information du titulaires </h2> 
                Nom: $this->_nom <br>
                Prénom: $this->_prenom <br>
                Date de naissance: $this->_dateNaissance <br>
                Âge: ".$this->calculeAge()." ans <br>
                Ville: $this->_ville <br>
                Compte Banquaire:  $nbCompte<br>";
    }
}

?>