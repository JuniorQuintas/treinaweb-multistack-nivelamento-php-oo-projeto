<?php

namespace App\Modelo;

class Cliente {
    public $nomeCliente;
    public function __construct($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }    
}