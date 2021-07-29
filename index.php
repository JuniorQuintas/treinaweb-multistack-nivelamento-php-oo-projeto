<?php
require_once('vendor/autoload.php');

use App\Controle\Diarista;
use App\Modelo\Diarista as DiaristaModelo;
use App\Modelo\Cliente;
use App\Modelo\Diaria;

$cliente = new Cliente;
$cliente->nomeCliente = "João";

$diarista = new DiaristaModelo;
$diarista->nomeDiarista = "Maria";

$diaria = new Diaria('29/07/2021',8,$diarista,$cliente);

var_dump($diaria);

/*
OBS.: Usamos no arquivo Modelo\Diarista.php o conceito de COMPOSIÇÃO - veja no arquivo os comentários

Usar COMPOSIÇÃO ou HERANÇA?
Herança é quando uma classe É a outra clase (Ex: classe(Diarista) É classe(Pessoa))
Composição é quando uma classe USA a outra classe (Ex: classe(Diarista) USA classe(Diaria))
*/