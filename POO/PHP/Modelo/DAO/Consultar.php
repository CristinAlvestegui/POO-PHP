<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Consultar{
     
        public function consulIndi(Conexao $connect, string $Pessoa, int $codigo){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Pessoa where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codigo"] == $codigo){
                        echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                        return;//return vazio só para sair do if
                    }//Fim do if
                }//Fim do while
                echo "Código não foi encontrado! :(";
            }
            catch(Except $erro){
                echo $erro;
            }

        }//Fim da função Consultar Individual

        public function consulTodo(Conexao $connect, string $Pessoa){
            try{
                $conn = $connect->conectar();
                $sql = "select * from $Pessoa";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Código: ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                }
            }
            catch(Except $erro){
                echo $erro;
            }
        }//Fim da função para consultar Todo!

    }//Fim da classe consultar

?>