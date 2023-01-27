<?php
    require_once('Address.php');

    class Cliente extends Pessoa{ //a classe cliente vai ser uma extensão da Pessoa
        private float $taxa;
        public function __construct(string $cpf, string $nome, string $telefone, Address $endereco, float $taxa){
            parent::__construct($cpfm, $nome, $telefone, $endereco);//dentro do contructor Cliente estamos chamando o construtor pai "parent" Pessoa
            $this->taxa = $taxa;
        }//Fim do construtor

        public function getTaxa() :float{
            return $this->taxa = $taxa;
        }

        public function setTaxa(float $taxa){
            $this->taxa = $taxa;
        }


    }//fim da classe
?>