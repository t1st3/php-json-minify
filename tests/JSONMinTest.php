<?php
require_once(dirname(dirname(__FILE__)) . '/src/jonrandoem/JSONMin/JSONMin.php');
use jonrandoem\JSONMin\JSONMin as jsonMin;

class JSONMinTest extends PHPUnit_Framework_TestCase
{

	public function testMinifies () {
		$a = jsonMin::minify('{"a": "b"}');
		$this->assertEquals('{"a":"b"}', $a);
	}

}
?>