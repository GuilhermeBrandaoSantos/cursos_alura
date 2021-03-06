<?php
    class Conta
    {
        /************ Atributos ************/

        private $nome_titular;
        private $saldo;
        private static $numero_contas = 0;

        /************ Métodos públicos ************/

        //Contruct
        public function __construct(Titular $nome_titular)
        {
            $this->nome_titular = $nome_titular;  
            $this->saldo = 0;            
            self::$numero_contas ++;
        }
        
        //Desctruct (Remove da memoria quando a instância deixa de existir na memória)
        public function __destruct()
        {
            self::$numero_contas --;   
        }

        public function sacar(float $valor_sacar)
        {
            if ($valor_sacar > $this->saldo) {
                echo 'Saque não autorizado! <br>';
                echo 'Valor do saque é maior que o saldo disponível!';

                return;
            }
            
            $this->saldo -= $valor_sacar;
            // echo '<br><b>'.$this->nome_titular.'</b><br>' .'Seu saldo autal é de R$' . $this->saldo;
                        
        }

        public function depositar(float $valor_depositar):void
        {
            if ($valor_depositar < 0) {
                echo 'Depósito não autorizado! <br>';
                echo 'Valor do depósito é menor que 0. Deposite um valor válido!';

                return;
            } 
            
            $this->saldo += $valor_depositar;
            // echo '<br><b>'.$this->nome_titular.'</b><br>' .'Seu saldo autal é de R$' . $this->saldo;
            
        }

        public function transferir(float $valor_transferir, $conta_tranferir):void
        {
            if ($valor_transferir > $this->saldo) {
                echo 'Transferência não autorizada! <br>';
                echo 'Valor da transferência é maior que o saldo disponível!';

                return;
            }

            $this->sacar($valor_transferir);
            $conta_tranferir->depositar($valor_transferir);

        }

        /************ Métodos estáticos ************/

        public static function numero_contas(): int
        {
            return self::$numero_contas ++ ;
        }

    }