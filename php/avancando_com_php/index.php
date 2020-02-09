<?php

ini_set('display_errors', 1);

// $idades = [21,23,54,65,97,56,65,21,12,54,32,27,29,54];
// $length = count($idades);

// for ($count=0; $count < $length; $count++) { 
//     echo $idades[$count] . '<br>';
// }


// $conta_1 = [
//     'titular' => 'Guilherme Brandão',
//     'saldo' => 'R$ ' . 2000.00,
//     'cpf' => 43990464817
// ];

// $conta_2 = [
//     'titular' => 'Satialis Anjo',
//     'saldo' => 'R$ ' . 4500.00,
//     'cpf' => 45512365498
// ];

// $conta_3 = [
//     'titular' => 'Jhonny Rohr',
//     'saldo' => 'R$ ' . 3215.00,
//     'cpf' => 45987565423
// ];

// $conta_4 = [
//     'titular' => 'Júnior',
//     'saldo' => 'R$ ' . 20000.00,
//     'cpf' => 456875642354
// ];

// $conta_5 = [
//     'titular' => 'Tatiana Guilger',
//     'saldo' => 'R$ ' . 2521.05,
//     'cpf' => 4568742315648
// ];

// $contas_bancarias = [$conta_1, $conta_2, $conta_3, $conta_4, $conta_5];
// $length = count($contas_bancarias);
// // var_dump($contas_bancarias);

// for ($i=0; $i < $length; $i++) { 
//     echo $contas_bancarias[$i]['titular'] .'<br>';    
// }

$contas_bancarias = [
    43990464817 => [
        'titular' => 'Guilherme Brandão',
        'saldo' => 'R$ ' . 2000.00,
        'cpf' => 43990464817
    ],
    45512365498 => [
        'titular' => 'Satialis Anjo',
        'saldo' => 'R$ ' . 4500.00,
        'cpf' => 45512365498
    ],
    45987565423 => [
        'titular' => 'Jhonny Rohr',
        'saldo' => 'R$ ' . 3215.00,
        'cpf' => 45987565423
    ],
    45687564235 => [
        'titular' => 'Júnior',
        'saldo' => 'R$ ' . 20000.00,
        'cpf' => 45875642354
    ],
    45687423156 => [
        'titular' => 'Tatiana Guilger',
        'saldo' => 'R$ ' . 2521.05,
        'cpf' => 45742315648
    ]
];

foreach ($contas_bancarias as $cpf => $contas) {
    echo $cpf . '<br>';
}