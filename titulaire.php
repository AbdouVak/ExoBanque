<?PHP
class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;
    private string $_ville;
    private string $_compteBanquaire;

    public function __construct($nom,$prenom,$dateNaissance,$ville,$compteBanquaire)
    {
        $this->_nom = $nom ;
        $this->_prenom = $prenom ;
        $this->_dateNaissance = $dateNaissance ;
        $this->_ville = $ville ;
        $this->_compteBanquaire = $compteBanquaire ;
    }

    
}

?>