<?php
ini_set('display_errors',1);

require '../classes/Conta.php';
require '../classes/Titular.php';
require '../classes/CPF.php';


$guilherme = new Titular(new CPF('439.904.648-17'), 'Guilherme Brandão');
$primeria_conta = new Conta($guilherme);

$satialis = new Titular(new CPF('109.876.543-21'), 'Satialis Anjo');
$segunda_conta = new Conta($satialis);

// $primeria_conta->sacar(500);
// $primeria_conta->depositar(500);

// $segunda_conta->sacar(100);
// $segunda_conta->depositar(1000);

echo '<br>'. Conta::numero_contas() . ' Contas registradas';

var_dump($primeria_conta, $segunda_conta);