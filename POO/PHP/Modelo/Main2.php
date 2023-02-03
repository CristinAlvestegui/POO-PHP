<?php
    namespace PHP\View;

    //require_once('Modelo/Pessoa.php');
    //require_once('Conta/Cliente.php');
    //require_once('Funcionario.php');
    //require_once('Conta/contas.php');
    require_once("DAO/Conexao.php");
    require_once("DAO/Inserir.php");
    require_once("DAO/Consultar.php");

    //use PHP\Modelo\Conta\Cliente;//estamos nos referindo a classe, que deve ser igual ao nome do arquivo.
    //use PHP\Modelo\Conta\Conta;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;

    /*
    $endereCris = new Address("Rua Bolivia", "09851760", "400", "Casa 2", "São Paulo", "Neves", "SBC", "Brazil", "SP");
    $clientCris = new Cliente(124569878422, "Cristina", "119554648", $endereCris, 15);
    $contaCris = new Conta($clientCris, 256546);
   
    echo $contaCris->getSaldo();
    echo $contaCris->depo($contaCris,500);
    echo $contaCris->getSaldo();
    echo $clientCris;
    */

    echo "******** Banco de dados *********<br><br>";
    $conexao = new Conexao();
    $conexao->conectar();
    $enter = new Inserir();//não colocamos os paramentro, porque a classe inserir n tem sontrutor
    echo $enter->cadastrar($conexao, "Pessoa", "cris", "11");

    $select = new Consultar();
    echo $select->consulIndi($conexao, "Pessoa", 1 );
    echo "<br><br>";
    echo $select->consulTodo($conexao, "Pessoa");


?>