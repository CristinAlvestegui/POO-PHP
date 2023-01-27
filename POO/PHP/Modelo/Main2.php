<?php
    namespace PHP\Modelo;

    require_once('Pessoa.php');
    require_once('Conta/Cliente.php');
    require_once('Funcionario.php');
    require_once('Conta/contas.php');

    use PHP\Modelo\Conta\Cliente;//estamos nos referindo a classe, que deve ser igual ao nome do arquivo.
    use PHP\Modelo\Conta\Conta;

    $endereCris = new Address("Rua Bolivia", "09851760", "400", "Casa 2", "São Paulo", "Neves", "SBC", "Brazil", "SP");
    $clientCris = new Cliente(124569878422, "Cristina", "119554648", $endereCris, 15);
    $contaCris = new Conta($clientCris, 256546);
   
    echo $contaCris->getSaldo();
    echo $contaCris->depo($contaCris,500);
    echo $contaCris->getSaldo();
?>