<?PHP
class Titulaire{
    private string $_libelle;
    private string $_soldeInitial;
    private string $_deviseMonetaire;
    private string $_titulaireUnique;

    public function __construct($libelle,$soldeInitial,$deviseMonetaire,$titulaireUnique)
    {
        $this->_libelle = $libelle ;
        $this->_soldeInitial = $soldeInitial ;
        $this->_deviseMonetaire = $deviseMonetaire ;
        $this->_titulaireUnique = $titulaireUnique ;
    }

    public function crediter(){

    }

    public function debiter(){
        
    }

    public function virement(){
        
    }
}
?>