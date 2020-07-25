<?php
function exibe_mensagem($mensagem){
    echo $mensagem . '<br>';
}

function saque($conta_cliente, $valor_saque){
    
    if ($valor_saque > $conta_cliente['saldo']) {
       echo 'Valor do saque é maior que seu saldo. Saque não autorizado!!!';
    }else {
        echo 'Saldo anterior: ' . $conta_cliente['saldo'] . '<br>';
        $conta_cliente['saldo'] -= $valor_saque;
        echo 'Saldo atual: ' . $conta_cliente['saldo'].'<br><br>';
    }

    return $conta_cliente;
}

function deposito($conta_cliente, $valor_deposito){
    if ($valor_deposito > 0 ) {
        echo 'Saldo anterior: ' . $conta_cliente['saldo'] . '<br>';
        $conta_cliente['saldo'] += $valor_deposito;
        echo 'Saldo atual: ' . $conta_cliente['saldo'] .'<br><br>';
    }else {
        echo 'Só são permitidos valores acima de R$0,00. Depósito não autorizado!!!';
    }
}