<?php 
require_once __DIR__ . "/Prodotti.php";

class Cibo extends Prodotti {

    public $scadenza;

    function __construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo, $_scadenza) {
        parent::__construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo);

        $this->scadenza = $_scadenza;
    }

    public function getName()
    {
        return "Nome prodotto: $this->nome | codice prodotto: $this->codiceProd | descrizione: $this->descrizione | categoria: $this->categoria | prezzo: €$this->prezzo | scadenza: $this->scadenza";
    }

}
?>