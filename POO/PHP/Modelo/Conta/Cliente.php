<?php
    namespace PHP\Modelo\Conta; //igual ao C# namaspace se refere ao nome do projeto, aqui colocamos o caminho para chegar no arquivo cliente
    
    require_once('Address.php');

    //Conectar o arquivo ao diretorio
    use PHP\Modelo\Pessoa;//enderecço do arquivo que estou usando
    use PHP\Modelo\Address;

    class Cliente extends Pessoa
    { //a classe cliente vai ser uma extensão da Pessoa
        private float $taxa;
        //Construtor
        public function __construct(string $cpf, string $nome, string $telefone, Address $endereco, float $taxa){
            parent::__construct($cpf, $nome, $telefone, $endereco);//dentro do contructor Cliente estamos chamando o construtor pai "parent" Pessoa
            $this->taxa = $taxa;
        }//Fim do construtor

        public function getTaxa() : float{
            return $this->taxa = $taxa;
        }

        public function setTaxa(float $taxa) : void
        {
            $this->taxa = $taxa;
        }
    }//fim da classe
?>