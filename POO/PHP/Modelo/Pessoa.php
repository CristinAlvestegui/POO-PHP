<?php
    namespace PHP\Modelo;
    
    require_once("Address.php");
    
    class Pessoa{
        private string $cpf;
        private string $nome;
        private string $telefone;
        private Address $endereco;
        //public string $endereco; endereço implica muitas informações, como rua, av, estado, municio, CEP ect.
        //vamos criar uma classe especifica para endereço.

        public function __construct(string $cpf, string $nome, string $telefone, Address $endereco){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }//FIm do construtor

        //Get Set
        public function getCPF() : string{
            return $this->cpf;
        }

        public function setCPF(string $cpf) : void{
            $this->cpf = $cpf;
        }

        public function getNome() : string{
            return $this->nome;
        }

        public function setNome(string $nome) : void{
            $this->nome = $nome;
        }

        public function getTele() : string{
            return $this->telefone;
        }

        public function setTele(string $telefone) : void{
            $this->telefone = $telefone;
        }

    }//Fim da classe Pessoa

?>