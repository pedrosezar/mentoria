<?php
namespace Mentoria\tests\Classes;

use PHPUnit\Framework\TestCase;
use Mentoria\Classes\TarefaUm;

class TarefaUmTest extends TestCase
{

	public function testTarefaUmTipo()
	{
		$tarefaUm = new TarefaUm();
		$this->assertInstanceOf(TarefaUm::class, $tarefaUm);
	}

	public function testLerArquivo()
	{
		$arquivo = $this->assertFileExists('./src/log/game.log', 'O arquivo não existe.');
		$this->assertFileIsReadable('./src/log/games.log', 'Falha ao abrir o arquivo.');
		$format = str_replace('\xc2\xa0', ' ', '  0:00 ------------------------------------------------------------');
		$this->assertEquals('  0:00 ------------------------------------------------------------', $format);
	}

}
