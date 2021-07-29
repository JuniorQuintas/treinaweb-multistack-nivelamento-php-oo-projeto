<?php

namespace App\Controle;

use App\Modelo\Diaria as ModeloDiaria;

class Diaria {
    public function listar()
    {
        $diarias = ModeloDiaria::obterTodas();
        require_once(__DIR__ . '/../../visual/listar_diarais.php');
    }
}