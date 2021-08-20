<?php
require_once './vendor/autoload.php';

use Mentoria\Classes\Desafio;

$desafio = new Desafio();

$arquivo = $desafio->lerArquivo('./src/log/games.log', 'r');

echo $arquivo;

?>