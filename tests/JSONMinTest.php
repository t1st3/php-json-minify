<?php

use PHPUnit\Framework\TestCase;
use t1st3\JSONMin\JSONMin as jsonMin;

final class JSONMinTest extends TestCase
{
  public function provideJson(): iterable
  {
    yield 'object' => [
      '{"a": "b"}',
      '{"a":"b"}',
    ];

    yield 'array' => [
      '[0, 1, 2, 3, 4, 5]',
      '[0,1,2,3,4,5]',
    ];

    yield 'single line comment' => [
      '{
      "a": "b",
      // Single Line Comment
      "c": "d"
      }',
      '{"a":"b","c":"d"}',
    ];

    yield 'multi line comment' => [
      '{
      "a": "b",
      /**
       * Multi Line Comment
       **/
      "c": "d"
      }',
      '{"a":"b","c":"d"}',
    ];
  }

  /**
   * @test
   * @dataProvider provideJson
   */
  public function minifies(string $json, string $expectedResult): void
  {
    $a = jsonMin::minify($json);
    $this->assertEquals($expectedResult, $a);
  }

  /**
   * @test
   * @dataProvider provideJson
   */
  public function getMinifies(string $json, string $expectedResult): void
  {
    $a = (new jsonMin($json))->getMin();
    $this->assertEquals($expectedResult, $a);
  }

  /**
   * @test
   * @dataProvider provideJson
   */
  public function echoMinifies(string $json, string $expectedResult): void
  {
    self::expectOutputString($expectedResult);
    (new jsonMin($json))->printMin();
  }
}
