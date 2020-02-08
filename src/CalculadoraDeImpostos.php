<?php

namespace Alura\DesignPattern;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, string $nomeImposto): float
    {
        switch ($nomeImposto) {
            case "ICMS":
                return $orcamento->valor * 0.1;
            case "ISS":
                return $orcamento->valor * 0.06;
        }
    }
}
