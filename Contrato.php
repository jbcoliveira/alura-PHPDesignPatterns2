<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contrato
 *
 * @author joao
 */
class Contrato {

    private $data;
    private $nome;
    private $cliente;
    private $estado;

    function __construct($data, $nome, $cliente, $estado = null) {
        $this->data = $data;
        $this->nome = $nome;
        $this->cliente = $cliente;
        if (!is_null($estado)) {
            $this->estado = $estado;
        } else {
            $this->estado = new EstadoNovo();
        }
    }

    function getData() {
        return $this->data;
    }

    function getNome() {
        return $this->nome;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getEstado() {
        return $this->estado;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    public function avanca() {
        $this->estado->avanca($this);
    }

    public function salvaContrato() {
        return new Contrato($this->data, $this->nome, $this->cliente, $this->estado);
    }

    public function restaura(Contrato $contrato) {
        $this->setCliente($contrato->getCliente());
        $this->setData($contrato->getData());
        $this->setEstado($contrato->getEstado());
        $this->setNome($contrato->getNome());
    }

}
