<?php

    require_once("Endereco.php");
    private string $matricula;
    private string $cargo;
    private float $salario;

    class Funcionario extends Pessoa{
        public function __construct(string $cpf, string $nome, string $telefone, Address $endereco, string $matricula, string $cargo, float $salario){
            parent::__construct($cpfm, $nome, $telefone, $endereco);
            $this->matricula = $matricula;
            $this->cargo = $cargo;
            $this->salario = $salario;
        }

        public function getMatri() : string{
            return $this->matricula = $matricula;
        }

        public function setMatri(string $matricula){
            $this->matricula = $matricula;
        }

        public function getCargo() : string{
            return $this->cargo = $cargo;
        }

        public function setCargo(string $cargo){
            $this->cargo = $cargo;
        }

        public function getSalario() : float{
            return $this->salario = $salario;
        }

        public function setSalario(float $salario){
            $this->salario = $salario;
        }
    }//Fim da classe Funcionario

?>