<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$orcamento = new Orcamento();

$item1 = new ItemOrcamento();
$item1->valor = 1000;

$orcamento->addItem($item1);
$orcamento->aprova();

echo $orcamento->aplicaDescontoExtra();

