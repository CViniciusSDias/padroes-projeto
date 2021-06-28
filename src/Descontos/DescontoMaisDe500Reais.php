<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $valorOrcamento = $orcamento->valor();
        if ($valorOrcamento > 500) {
            return $valorOrcamento * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
