<?php
namespace FDJ\Common\Tests;

use FDJ\Common\People;

class PeopleTest extends \PHPUnit_Framework_TestCase
{
    public function testSayHelloSHouldBeReturnHello()
    {
        $people = new People();
        $this->assertEquals('Hello', $people->say("Hello"));
    }
}
