<?php

//error_reporting(0);
function autoload($class) {
    require_once $class . ".php";
}

spl_autoload_register("autoload");

require "ConnectionFactory.php";

//$factory = new ConnectionFactory();
//$conexao = $factory->getConnection();
//var_dump($conexao);

$data = new DateTime();
$nome = "Contrato 1";
$cliente = "Joao";

$historico = new Historico();
$contrato = new Contrato($data, $nome, $cliente);

var_dump($contrato);
var_dump($historico);
$historico->adicionaContrato($contrato->salvaContrato());
$contrato->avanca();
echo '----------';

var_dump($contrato);
var_dump($historico);
echo '----------';

$historico->adicionaContrato($contrato->salvaContrato());
$contrato->avanca();

var_dump($contrato);
var_dump($historico);
echo '----------';

$historico->adicionaContrato($contrato->salvaContrato());
$contrato->avanca();

var_dump($contrato);
var_dump($historico);
echo '----------';




$contrato->restaura($historico->getContratoSalvo(0));
var_dump($contrato);