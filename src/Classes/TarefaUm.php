<?php
namespace Mentoria\Classes;

use Mentoria\Exceptions\FileException;

class TarefaUm extends FileException
{

	public function lerArquivo(string $filename, string $mode) : string
	{
		try {
			if (!file_exists($filename)) {
				throw new FileException(parent::ARQUIVO_INEXISTENTE);
			}
			$arquivo = fopen($filename, $mode);
			if (!$arquivo) {
				throw new FileException(parent::ARQUIVO_CORROMPIDO);
			}
			return fgets($arquivo);
			fclose($arquivo);
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}

}
