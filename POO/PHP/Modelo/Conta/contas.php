<?php
    namespace PHP\Modelo\Conta;

    require_once("Cliente.php");
    
    class Conta{
            
        private float $saldoTitu;
        private Cliente $cli;

        public function __construct(Cliente $cli, float $saldo){
            //aqui instanciamos as variáveis
            $this->cli = $cli;
            $this->setSaldo($saldo);

        }//Fim do construtor


        //métodos Get Set
        public function getSaldo() : float{
            return $this->saldoTitu;
        }

        public function setSaldo(float $saldo) : void{
            $this->saldoTitu = $saldo;
        }

        //saque, transferir, depositar

        public function saque(Conta $cont, float $valor) :void{ //estamos falando que o nosso paramêtro é o objeto conta, com todos os dados necessarios do construtor
            if($cont->getSaldo() >= $valor){//condição para verificar que o valor de saque não é maior do que tem no saldo
                $cont->setSaldo($cont->getSaldo()-$valor);//aqui estamos modificando o saldo com setsaldo  com o valor do saque pelo método de getsaldo
                return; //Um retorno vazio para sair do if
            }
            echo "<br> Não é possivel sacar $valor, pois a conta tem apenas ".$cont->getSaldo()."<br>";
        }

        public function depo(Conta $cont, float $valor) : void{
            if($valor > 0){
                $cont->setSaldo($cont->getSaldo()+ $valor);
                echo "<br>Depósito realizado com sucesso";
                return; //Um retorno vazio para sair do if
            }
            echo "<br>Impossível depositar, algo deu errado<br>";
        }

        public function trans(Conta $saq, Conta $transf, float $valor){
            if($valor > 0){
                $saq->saque($saq, $valor);
                $transf->depo($transf, $valor);
                return;
            }
            echo "<br>Impossível realizar a transferência<br>";
        }
    }//Fim da classe


?>