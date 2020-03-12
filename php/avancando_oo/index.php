<?php
    ini_set('display_errors',1);

    require_once 'autoload.php';

    // use Cursos_alura\POO\Model\Conta;
    use Cursos_alura\POO\Model\Conta\Conta as Conta;
    use Cursos_alura\POO\Model\Conta\Titular;
    use Cursos_alura\POO\Model\CPF;


    $guilherme = new Titular(new CPF('439.904.648-17'), 'Guilherme Brandão');
    $primeria_conta = new Conta($guilherme);

    $satialis = new Titular(new CPF('109.876.543-21'), 'Satialis Anjo');
    $segunda_conta = new Conta($satialis);

    echo '<br>'. Conta::numero_contas() . ' Contas registradas';

    var_dump($primeria_conta, $segunda_conta);