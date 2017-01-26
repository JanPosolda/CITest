<?php
/**
 * Created by PhpStorm.
 * User: Jan Posolda
 * Date: 26.01.2017
 * Time: 11:24
 */

namespace JanPosolda;

class Test
{
	public function testMyClass()
	{
		$myClass = new MyClass();
		assert($myClass->getOneNumber(), 1);
	}
}