<?php
    class Conta{

        private string $cpfTitu;
        private string $nomeTitu;
        private float $saldoTitu;

        public function __construct(string $cpf, string $nome, float $saldo){
            //aqui instanciamos as variáveis
            $this->setCPF($cpf); //estamos fazendo referencia a variavel definida na classe
            $this->setnome($nome);
            $this->setSaldo($saldo);
        }//Fim do construtor


        //métodos Get Set
        public function getCPF() : string{
            return $this->cpfTitu;
        }

        public function setCPF(string $cpf) : void {
            $this->cpfTitu = $cpf;
        }

        public function getNome() : string{
            return $this->nomeTitu;
        }

        public function setNome(string $nome) : void{
            $this->nomeTitu = $nome;
        }

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



        //Mostrar os detalhes da conta na tela
        public function imprit() : void{
            echo "<br>CPF: ".$this->getCPF()."<br>Nome: ".$this->getNome()."<br>Saldo: ".$this->getSaldo()." R$"; //Quando usamos this na mesma classe, devemos chamar com this tbm
        }
    }//Fim da classe


?>