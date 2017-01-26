<?php
/**
 * Created by PhpStorm.
 * User: Jan Posolda
 * Date: 26.01.2017
 * Time: 11:24
 */

namespace JanPosolda;


class Test extends PHPUnit_Framework_TestCase
{
	public function testMyClass() {
		$myClass = new MyClass();
		$this->assertEquals($myClass->getOneNumber(), 1);
	}
}