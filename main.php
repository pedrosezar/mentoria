<?php
require_once './vendor/autoload.php';

use Mentoria\Classes\TarefaUm;

$tarefaUm = new TarefaUm();

$arquivo = $tarefaUm->lerArquivo('./src/log/games.log', 'r');

echo $arquivo;

?>
