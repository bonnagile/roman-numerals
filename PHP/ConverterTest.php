<?php
namespace de\bonnagile\romannumerals;

require_once("Converter.php");

use de\bonnagile\romannumerals;

class ConverterTest extends \PHPUnit_Framework_TestCase
{
    public function testOneConvertsToI()
    {
        $this->assertEquals("I", Converter::convert(1));
    }
}
 