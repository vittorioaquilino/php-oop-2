<?php 
// creo la classe utente
class Utente {
    public $nomeUtente;
    public $cognome;
    public $registrato;
    protected $discount;

    function __construct($_nomeUtente, $_cognome, $_registrato, $_discount) {
        $this->nomeUtente = $_nomeUtente;
        $this->cognome = $_cognome;
        $this->registrato = $_registrato;
        $this->discount = $_discount;
    }


}
?>