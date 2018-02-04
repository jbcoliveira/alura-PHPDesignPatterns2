<?php



class Historico {

    private $contratosSalvos;

    function __construct() {
        $this->contratosSalvos = Array();
    }

    public function getContratoSalvo($index) {
        return $this->contratosSalvos[$index];
    }

    public function adicionaContrato($contrato) {
        $this->contratosSalvos[] = $contrato;
    }

}
