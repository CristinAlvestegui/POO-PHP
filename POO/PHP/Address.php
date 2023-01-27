<?php
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
        public function getRua(){
            return $this->rua = $rua;
        }

        public function setRua(){
            $this->rua = $rua;
        }

        public function getCEP(){
            return $this->CEP = $CEP;
        }

        public function setCEP(){
            $this->CEP = $CEP;
        }

        public function getNum(){
            return $this->numero = $numero;
        }

        public function setNum(){
            $this->numero = $numero;
        }

        public function getComple(){
            return $this->comple = $comple;
        }

        public function setComple(){
            $this->comple = $comple;
        }

        public function getCidade(){
            return $this->cidade = $cidade;
        }

        public function setCidade(){
            $this->cidade = $cidade;
        }

        public function getBairro(){
            return $this->bairro = $bairro;
        }

        public function setBairro(){
            $this->bairro = $bairro;
        }

        public function getEstado(){
            return $this->estado = $estado;
        }

        public function setEstado(){
            $this->estado = $estado;
        }

        public function getPais(){
            return $this->pais = $pais;
        }

        public function setPais(){
            $this->pais = $pais;
        }

        public function getUF(){
            return $this->UF = $UF;
        }

        public function setPais(){
            $this->UF = $UF;
        }
    }//fima da Classe Endereço
?>