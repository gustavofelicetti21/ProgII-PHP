<?php

use Atividades7\Ex1\Cachorro;
use Atividades7\Ex1\Gato;

require_once "Gato.php";
require_once "Cachorro.php";

$gato = new Gato();
$gato->falar();

$cachorro = new Cachorro();
$cachorro->falar();