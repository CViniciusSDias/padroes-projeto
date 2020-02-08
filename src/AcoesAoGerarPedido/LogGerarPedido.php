<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de geração de pedido";
    }
}
