<?PHP
class compteBanque{
    private string $_libelle;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private titulaire $_titulaire;

    public function __construct($libelle,$soldeInitial,$deviseMonetaire,titulaire $titulaire)
    {
        $this->_libelle = $libelle ;
        $this->_soldeInitial = $soldeInitial ;
        $this->_deviseMonetaire = $deviseMonetaire ;
        $this->_titulaire = $titulaire;
        $this->_titulaire->addCompte($this);

    }

    /*Création des methode getter et setter*/ 
    public function getLibelle(): string{return $this->_libelle;}
    public function setLibelle(string $libelle){$this->_libelle = $libelle;}

    public function getSoldeInitial(): string{return $this->_soldeInitial;}
    public function setSoldeInitial(string $soldeInitial){$this->_soldeInitial = $soldeInitial;}

    public function getDeviseMonetaire(): string{return $this->_deviseMonetaire;}
    public function setDeviseMonetaire(string $deviseMonetaire){$this->_deviseMonetaire = $deviseMonetaire;}

    public function getTitulairee(): string{return $this->_titulaire;}
    public function setTitulaire(string $titulaire){$this->_titulaire = $titulaire;}


    /*Création de la methode pour créditer un compte*/ 
    public function crediter($sommeAjouter){
        $this->_soldeInitial = $this->_soldeInitial + $sommeAjouter;
        return "Vous avez crédité votre compte  $this->_libelle de  $sommeAjouter $this->_deviseMonetaire<br>";
    }

    /*Création de la methode pour débiter un compte*/ 
    public function debiter($sommeRetirer){
        $this->_soldeInitial = $this->_soldeInitial + $sommeRetirer;
        return "Vous avez debité votre compte  $this->_libelle de  $sommeRetirer $this->_deviseMonetaire<br>";

    }

    /*Création de la methode pour faire un virement d'un compte titulaire a un autres*/ 
    public function virement($compteDestinataire,$sommeVirer){
        foreach($this->_titulaire->getCompteBanquaire() as $compte){
            if($compte == $compteDestinataire){
                $this->debiter($sommeVirer);
                $compte->crediter($sommeVirer);
                return "Vous avez fait un virement de $sommeVirer $this->_deviseMonetaire de votre compte  $this->_libelle a votre compte $compte->_libelle ";
            }
        }
    }

    /*Utilisation de fonction toString pour afficher les information du compte banquaire*/ 
    public function __toString()
    {
        return "<br><h2> Information du compte banquaire</h2> 
                Libellé: $this->_libelle <br>
                Solde: $this->_soldeInitial <br>
                Devise: $this->_deviseMonetaire <br>
                Titulaire: $this->_titulaire <br>";
    }

}
?>