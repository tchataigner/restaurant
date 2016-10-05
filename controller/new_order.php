<?php

$test = new test;

$test->meh();



class test {

	public function meh()
	{
		$var = 5;
		var_dump($var); exit;
		return "test.php";
	}
}