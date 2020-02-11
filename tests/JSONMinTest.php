<?php
require_once(dirname(dirname(__FILE__)) . '/src/t1st3/JSONMin/JSONMin.php');

use PHPUnit\Framework\TestCase;
use t1st3\JSONMin\JSONMin as jsonMin;

class JSONMinTest extends TestCase
{
  public function provideJson()
  {
      yield [
          '{"a": "b"}',
          '{"a":"b"}',
      ];

      yield [
          '[0, 1, 2, 3, 4, 5]',
          '[0, 1, 2, 3, 4, 5]',
      ];
  }

  /**
   * @dataProvider provideJson
   */
  public function testMinifies ($json, $expectedResult) {
    $a = jsonMin::minify($json);
    $this->assertEquals($expectedResult, $a);
  }

}
?>
