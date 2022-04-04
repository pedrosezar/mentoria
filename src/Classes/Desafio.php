<?php
namespace Mentoria\Classes;

class Desafio
{

	public function lerArquivo(string $filename, string $mode) : string
	{
		try {
			if (!file_exists($filename)) {
				throw new \Exception('O arquivo não existe.');
			}
			$arquivo = fopen($filename, $mode);
			if (!$arquivo) {
				throw new \Exception('Falha ao abrir o arquivo.');
			}
			return fgets($arquivo);
			fclose($arquivo);
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}

}