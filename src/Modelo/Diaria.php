<?php

namespace App\Modelo;

class Diaria {
    private $data;
    private $tempo;
    // Agora vamos usar o conceito COMPOSIÇÃO
    private Diarista $diarista; // esta propiedade $diarista foi definida aqui do tipo Diarista.
    // Ou seja, estamos compondo esta propriedade com a propiedade de outra classe. O mesmo aconteceu abaixo.
    private Cliente $cliente;

    public function __construct($data, $tempo, Diarista $diarista, Cliente $cliente)
    {
        $this->tempo = $tempo;
        $this->data = $data;
        $this->diarista = $diarista;
        $this->cliente = $cliente;
    }
}