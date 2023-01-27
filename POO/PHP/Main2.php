<?php
    require_once('Pessoa.php');
    require_once('Cliente.php');
    require_once('Funcionario.php');
    require_once('contas.php');

    $endereCris = new Address("Rua Bolivia", "09851760", "Casa 2", "São Paulo", "Neves", "SBC", "Brazil", "SP");
    $clientCris = new Cliente(124569878422, "Cristina", "119554648", $endereCris, 15);
    $contaCris = new Conta($clientCris, 256546);
?>