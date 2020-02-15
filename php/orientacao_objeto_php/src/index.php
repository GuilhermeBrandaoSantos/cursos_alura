<?php
ini_set('display_errors',1);

require '../classes/Conta.php';

$primeria_conta = new Conta('439.904.648-17', 'Guilherme Brandão');
$segunda_conta = new Conta('109.876.543-21', 'Satialis Anjo');

// $primeria_conta->sacar(500);
$primeria_conta->depositar(500);

// $segunda_conta->sacar(100);
// $segunda_conta->depositar(1000);



var_dump($primeria_conta, $segunda_conta);