<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Excluir{

        public function delete(Conexao $conex, string $Pessoa, int $codigo){
            try{
                $connect = $conex->conectar();//Fazendo conexão com a base de dados
                $sql = "delete from $Pessoa where codigo = '$codigo'";//Comando script do MySQL para inserir na tabela
                $result = mysqli_query($connect, $sql);//Executa ação do script no banco

                mysqli_close($connect);//Fechado a conexão.
                if($result){
                    echo "<br><br>Deletado com sucesso!";
                    return;
                }
                echo "<br><br>Algo deu Errado! :(";
                
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim da função para deletar

    }//Fim da classe

?>