<?php

class PigLatin
{
	public function convert($word)
	{
		// Remove the first letter of the word
		$first_letter = substr($word, 0, 1);
		$new_word = substr($word, 1, strlen($word)-1);
		$new_word .= $first_letter . 'ay';
		
		return $new_word;
	}
}
?>