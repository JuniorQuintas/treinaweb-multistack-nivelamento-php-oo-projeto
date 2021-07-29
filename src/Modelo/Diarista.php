<?php

namespace App\Modelo;

class Diarista {
    public $nomeDiarista;
    public function __construct($nomeDiarista)
    {
        $this->nomeDiarista = $nomeDiarista;        
    }
}