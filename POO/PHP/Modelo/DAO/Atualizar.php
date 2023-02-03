<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Atualizar{

        public function update(Conexao $conexao, string $Pessoa ,string $campo, string $novoDado, string $codigo){
            try{
                $conn = $connect->conectar();
                $sql = "update $Pessoa set $campo = '$novoDado' where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);

                if($result){
                    echo "<br><br>Atualizaso com sucesso!";
                    return;
                }
                echo "<br><br>Impossivel Atualizar!";
            }catch(Except $erro){
                echo $erro;
            }
        }
        

    }//Fim da classe


?>