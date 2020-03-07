<?php

use Alura\DesignPattern\Http\CurlHttpAdapter;
use Alura\DesignPattern\RegistroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new \Alura\DesignPattern\Orcamento());
