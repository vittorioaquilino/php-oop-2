<?php 
// creo la classe prodotti
class Prodotti {
    public $nome;
    public $codiceProd;
    public $descrizione;
    public $categoria;
    public $prezzo;

    // funzione construct
    function __construct($_nome, $_codiceProd, $_descrizione, $_categoria, $_prezzo) {
        $this->nome = $_nome;
        $this->codiceProd = $_codiceProd;
        $this->descrizione = $_descrizione;
        $this->categoria = $_categoria;
        $this->prezzo = $_prezzo;
    }


    public function getName()
    {
        return "Nome prodotto: $this->nome | codice prodotto: $this->codiceProd | descrizione: $this->descrizione | categoria: $this->categoria | prezzo: €$this->prezzo";
    }

}
?>