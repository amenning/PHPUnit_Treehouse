<?php
require 'vendor\autoload.php';
require 'PigLatin1.php';

class PigLatinTest extends PHPUnit_Framework_TestCase
{
	/**
	* @test
	*/
	public function englishToPiglatinWorksCorrectly()
	{
		/**
		* Given I have an english word
		* If I pass that word to my PigLatin converter
		* I get back the correctly transformed version
		*/
		$this->assertTrue(false);
	}
}
?>