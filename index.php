<?php
require_once('vendor/autoload.php');

use App\Controle\Diaria;

$diariaControle = new Diaria; 
$diariaControle->listar();