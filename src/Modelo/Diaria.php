<?php

namespace App\Modelo;

class Diaria {
    public $data;
    public $tempo;
    // Agora vamos usar o conceito COMPOSIÇÃO
    public Diarista $diarista; // esta propiedade $diarista foi definida aqui do tipo Diarista.
    // Ou seja, estamos compondo esta propriedade com a propiedade de outra classe. O mesmo aconteceu abaixo.
    public Cliente $cliente;

    public function __construct($data, $tempo, Diarista $diarista, Cliente $cliente)
    {
        $this->tempo = $tempo;
        $this->data = $data;
        $this->diarista = $diarista;
        $this->cliente = $cliente;
    }

    static public function obterTodas() // ao usar static estou dizendo que o método obterTodas pode ser chamado estaticamente
    {
        return [
            new self( // new shlf seria a mesma coisa que new Diaria - ou estanciar a classe
                '29/07/2021',
                8,
                new Diarista('Maria'),
                new Cliente("João")
            ),
            new self( // new shlf seria a mesma coisa que new Diaria - ou estanciar a classe
                '25/07/2021',
                3,
                new Diarista('Luzia'),
                new Cliente("Marcos")
            ),
            new self( // new shlf seria a mesma coisa que new Diaria - ou estanciar a classe
                '10/07/2021',
                4,
                new Diarista('Maria'),
                new Cliente("Antônia")
            ),
            new self( // new shlf seria a mesma coisa que new Diaria - ou estanciar a classe
                '30/06/2021',
                6,
                new Diarista('Luzia'),
                new Cliente("João")
            ),
        ];
    }
}