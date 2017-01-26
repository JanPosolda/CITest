<?php
/**
 * Created by PhpStorm.
 * User: Jan Posolda
 * Date: 26.01.2017
 * Time: 11:24
 */

class MyClassTest extends \PHPUnit_Framework_TestCase
{
	public function testMyClass()
	{
		$myClass = new \JanPosolda\MyClass();
		$this->assertEquals($myClass->getOneNumber(), 1);
	}
}