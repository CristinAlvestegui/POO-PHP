<?php

    namespace PHP\Modelo\DAO;

    require_once("Conexao.php");

    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public function cadastrar(Conexao $conex, string $Pessoa, string $nome, string $telefone){
            try{
                $conn = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "insert into $Pessoa (codigo, nome, telefone) values ('','$nome','$telefone')";//Comando script do MySQL para inserir na tabela
                $result = mysqli_query($conn, $sql);//Executa ação do script no banco
                mysqli_close($conn);//Fechado a conexão.
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Algo deu Errado! :(";
                
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do método inserir
        
    }//Fim da classe Inserir

?>