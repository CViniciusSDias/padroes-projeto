<?php

use Alura\DesignPattern\PdoConnection;

require 'vendor/autoload.php';

$pdo = new PdoConnection('sqlite::memory:');
// $pdo->query('');

$pdo2 = new PdoConnection('sqlite::memory:');

var_dump($pdo, $pdo2);
