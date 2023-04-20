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

    public function getLibelle(): string{return $this->_libelle;}
    public function setLibelle(string $libelle){$this->_libelle = $libelle;}

    public function getSoldeInitial(): string{return $this->_soldeInitial;}
    public function setSoldeInitial(string $soldeInitial){$this->_soldeInitial = $soldeInitial;}

    public function getDeviseMonetaire(): string{return $this->_deviseMonetaire;}
    public function setDeviseMonetaire(string $deviseMonetaire){$this->_deviseMonetaire = $deviseMonetaire;}

    public function getTitulairee(): string{return $this->_titulaire;}
    public function setTitulaire(string $titulaire){$this->_titulaire = $titulaire;}


    public function crediter($sommeAjouter){
        $this->_soldeInitial = $this->_soldeInitial + $sommeAjouter;
        echo "Vous avez crédité votre compte  $this->_libelle de  $sommeAjouter $this->_deviseMonetaire<br>";
    }

    public function debiter($sommeRetirer){
        $this->_soldeInitial = $this->_soldeInitial + $sommeRetirer;
        echo "Vous avez debité votre compte  $this->_libelle de  $sommeRetirer $this->_deviseMonetaire<br>";

    }

    public function virement($compteDestinataire,$sommeVirer){
        foreach($this->_titulaire->getCompteBanquaire() as $compte){
            if($compte == $compteDestinataire){
                $compte->crediter($sommeVirer);
                $this->debiter($sommeVirer);
            }
        }
    }

    public function __toString()
    {
        return "Libellé: $this->_libelle <br>
                Solde: $this->_soldeInitial <br>
                Devise: $this->_deviseMonetaire <br>
                Titulaire: $this->_titulaire <br>";
    }

}
?>