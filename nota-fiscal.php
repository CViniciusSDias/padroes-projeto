<?php

use Alura\DesignPattern\ItemOrcamento;
use Alura\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscal();

$notaFiscal = $builder->paraEmpresa('1234654.', 'Vinicius Dias Tecnologia')
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comItem(new ItemOrcamento())
    ->comObservacoes('Esta nota fiscal foi construída com um construtor')
    ->constroi();
