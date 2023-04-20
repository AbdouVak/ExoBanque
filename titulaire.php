<?PHP
class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
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

    public function getNom() : string{return $this->_nom;}
    public function setNom(string $Nom){$this->_nom = $Nom;}

    public function getPrenom() : string{return $this->_prenom;}
    public function setPrenom(string $prenom){$this->_prenom = $prenom;}
    
    public function getDateNaissance() : string{return $this->_dateNaissance;}
    public function setDateNaissance(string $dateNaissance){$this->_dateNaissance = $dateNaissance;}

    public function getVille() : string{return $this->_ville;}
    public function setVille(string $ville){$this->_ville = $ville;}

    public function getCompteBanquaire() {return $this->_compteBanquaire;}

    public function __toString()
    {
        return "Nom: $this->_nom <br>
                Prénom: $this->_prenom <br>
                Date de naissance: $this->_dateNaissance <br>
                Ville: $this->_ville <br>
                CompteBanquaire: $this->_compteBanquaire <br>";

    }

    public function addCompte($compteBanquaire){
        $this->_compteBanquaire[] = $compteBanquaire;
    }

}

?>