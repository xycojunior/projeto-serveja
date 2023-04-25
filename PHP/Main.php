<?php

require_once "Pessoa.php";
require_once "Prato.php";
require_once "Produtos.php";

$cliente = new Cliente("Hudson","teste@teste.com",1234,"012.123.789-70");
$funcionario = new Funcionario("Daniel","teste@teste.com",1234,"521.658.978-80");
$produto = new Produtos("Pão","412Ab123nias",10);
$prato = new Prato("X-bacon","Hamburguer com pão,carne....","R$ 16,50");