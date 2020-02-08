<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class Ikcv implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 300 && $orcamento->quantidadeItens > 3) {
            return $orcamento->valor * 0.04;
        }

        return $orcamento->valor * 0.025;
    }
}
