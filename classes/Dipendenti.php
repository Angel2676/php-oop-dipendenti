<?php
require_once __DIR__.'/../traits/Ruolo.php';
class Dipendenti {
    public $nome;
    public $cognome;
    public $dateOfBirth;
    public $placeOfBirth;
    private $codFiscale;
    private $matricolaInps;
    public $reparto;
    protected $retribuzioneOraria;
    use Ruolo;

    public function __construct($_nome, $_cognome){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
    }
    public function setCodFisc($_codFiscale){
        if(empty($_codFiscale)) {
            die('devi inserire il codice fiscale');
        }
        if(strlen($_codFiscale) <> 16){
            die('Inserisci un Codice Fiscale Corretto');
        }
        $this->codFiscale = $_codFiscale;

    }
    public function getCodFisc(){
        return $this->codFiscale;
    }

    public function setMatrInps($_matricolaInps){
        if (empty($_matricolaInps)) {
            die('Insersici il numero di matricola');
        }

        if(strlen($_matricolaInps) <> 6) {
            die('Inserisci una matricola INPS valida');
        }
        $this->matricolaInps = $_matricolaInps;
    }

    public function getMatrInps(){
        return $this->matricolaInps;
    }

    public function setReparto($_reparto){
        if (empty($_reparto)) {
            die('Inserisci il reparto');
        }
        $this->reparto = $_reparto;
    }

    public function getReparto(){
     return $this->reparto;
    }

    public function setStipendio($_retribuzioneOraria, $_oreLavoro, $_aliquota = 0.9){
        if(empty($_retribuzioneOraria)){
            die('Il dipendente selzionato non lavora piu presso di noi');
        }
        if (!number_format($_retribuzioneOraria)) {
            die('Inserisci valori numerici');
        }
        $this->retribuzioneOraria = ($_retribuzioneOraria * $_oreLavoro) * $_aliquota;
    }

    public function getStipendio(){
        return $this->retribuzioneOraria;
    }

}
