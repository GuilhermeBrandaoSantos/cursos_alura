<?php
ini_set('display_errors', 1);

require 'contas_bancarias.php';
require 'functions.php';


saque($contas_bancarias['43990464817'], 1500);
// deposito($contas_bancarias['43990464817'], 1500);

foreach ($contas_bancarias as $cpf => $contas) {
    ['titular' => $titular, 'saldo' => $saldo] = $contas;
    exibe_mensagem('CPF:' . $cpf .' => Titular:'. $titular . ' => Saldo: '. $saldo. '<br>');
}