<?php
namespace Mentoria\Exceptions;

class FileException extends \Exception {

	const ARQUIVO_INEXISTENTE = 'O arquivo não existe.';
	const ARQUIVO_CORROMPIDO = 'Falha ao abrir o arquivo.';

}
