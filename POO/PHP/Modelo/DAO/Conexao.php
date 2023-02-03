<?php
    namespace PHP\Modelo\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'Banco');
                if($conn){
                    echo "<br> Conexão feita com sucesso!";
                    return $conn;
                }else{
                    echo "<br> Não Entramos! :(";
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//Fim do conectar
    }//Fim da classe
?>