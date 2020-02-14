<?php 

function criar_conta(string $cpf, string $nome_titular, float $saldo):array
{
    return[
        $cpf =>[
            'titular' => $nome_titular,
            'saldo' => $saldo
        ]
    ];
}