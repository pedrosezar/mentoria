<?php
namespace Mentoria\tests\Classes;

use PHPUnit\Framework\TestCase;
use Mentoria\Classes\Desafio;

class DesafioTest extends TestCase
{

	public function testDesafioTipo()
	{
		$desafio = new Desafio();
		$this->assertInstanceOf(Desafio::class, $desafio);
	}

	public function testLerArquivo()
	{
		$desafio = new Desafio();
		$arquivo = $desafio->lerArquivo('./src/log/games.log', 'r');
		$format = str_replace('\xc2\xa0', ' ', '  0:00 ------------------------------------------------------------');
		$this->assertEquals('  0:00 ------------------------------------------------------------', $format);
	}

}