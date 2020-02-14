<?php
ini_set('display_errors',1);

require '../classes/Conta.php';

$primeria_conta = new Conta();
$segunda_conta = new Conta();


$primeria_conta->cpf = '123.456.789-10';
$primeria_conta->nome_titular = 'Guilherme Brandão';
$primeria_conta->saldo = 1500;

$segunda_conta->cpf = '109.876.543-21';
$segunda_conta->nome_titular = 'Satialis Anjo';
$segunda_conta->saldo = 2654;

var_dump($primeria_conta, $segunda_conta);