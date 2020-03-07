<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

class IcmsComIss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return (new Icms())->calculaImposto($orcamento) + (new Iss())->calculaImposto($orcamento);
    }
}
