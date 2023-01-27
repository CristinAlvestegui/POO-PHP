<?php
    namespace PHP\Modelo;
    //chamamos outra classe
    //include //menos seguro, e n mostra os erros, continua rodando a página mesmo assim
    //require //obriga a mostrar os error e roda somente se a classe foir carregada, podemos rodar varioas metodos varias vezes
    //require_once executa uma vez e roda uma vez somente UMA VEZ.
    require('contas.php');

    //Criando Conta
    $conta = new Conta("45646546543", "Cristina Alvestegui", 16450);
    $conta->imprit();//notação de setinha kkk para chamar metodos dentro de uma clase this->

    echo "<br><br>";
    $otherCon = new Conta('348974986745', "Vitor", 354654);
    $otherCon->imprit();

    echo "<br><br>";
    //Realizando saque
    $conta->saque($conta, 600);
    $conta->imprit();

    echo "<br><br>";
    //Depositando
    $conta->depo($conta, 1500);
    $conta->imprit();

    echo "<br><br>";
    $conta->trans($otherCon, $conta, 4500);
    $conta->imprit();
    echo "<br><br>s";
    $otherCon->imprit();
?>