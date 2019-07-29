<?php

class FileTest extends \PHPUnit\Framework\TestCase
{
  public function test() {
    $parser = \CsvParser\Parser\Csv::getParser();
    $parser->feed(file_get_contents(__DIR__ . "/data/countries.csv"));
    $parser->finish();

    $records = [];
    while($record = $parser->getRecord()) {
      $records[] = $record;
    }

    $this->assertEquals(5, count($records));
  }
}