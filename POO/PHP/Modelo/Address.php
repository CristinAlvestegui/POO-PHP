<?php
    namespace PHP\Modelo;
    
    class Address {
        private string $rua;
        private string $CEP;
        private int $numero;
        private string $comple;
        private string $cidade;
        private string $bairro;
        private string $estado;
        private string $pais;
        private string $UF;

        public function __construct(string $rua, string $CEP, int $numero, string $comple, string $cidade, string $bairro, string $estado, string $pais, string $UF){
            $this->rua = $rua;
            $this->CEP = $CEP;
            $this->numero = $numero;
            $this->comple = $comple;
            $this->cidade = $cidade;
            $this->bairro = $bairro;
            $this->estado = $estado;
            $this->pais = $pais;
            $this->UF = $UF;
        }

        //Get SET
        public function getRua() : string{
            return $this->rua = $rua;
        }

        public function setRua(string $rua) : void{
            $this->rua = $rua;
        }

        public function getCEP() : string{
            return $this->CEP = $CEP;
        }

        public function setCEP(string $rua) : void{
            $this->CEP = $CEP;
        }

        public function getNum() : int{
            return $this->numero = $numero;
        }

        public function setNum(int $numero) : void{
            $this->numero = $numero;
        }

        public function getComple() : string{
            return $this->comple = $comple;
        }

        public function setComple(string $comple) : void{
            $this->comple = $comple;
        }

        public function getCidade() : string{
            return $this->cidade = $cidade;
        }

        public function setCidade(string $cidade) : void{
            $this->cidade = $cidade;
        }

        public function getBairro() : string{
            return $this->bairro = $bairro;
        }

        public function setBairro(string $bairro) : void{
            $this->bairro = $bairro;
        }

        public function getEstado() : string{
            return $this->estado = $estado;
        }

        public function setEstado(string $estado) : void{
            $this->estado = $estado;
        }

        public function getPais() : string{
            return $this->pais = $pais;
        }

        public function setPais(string $pais) : void{
            $this->pais = $pais;
        }

        public function getUF() : string{
            return $this->UF = $UF;
        }

        public function setUF(string $UF) : void{
            $this->UF = $UF;
        }
    }//fima da Classe Endereço
?>