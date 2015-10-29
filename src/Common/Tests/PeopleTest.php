<?php
namespace FDJ\Common\Tests;

use FDJ\Common\Mood\Angry;
use FDJ\Common\Mood\Happy;
use FDJ\Common\People;

class PeopleTest extends \PHPUnit_Framework_TestCase
{
    public function testSayHello()
    {
        $people = new People();
        $this->assertEquals('Hello', $people->say("Hello"));
    }

    public function testSayHelloWhenPeopleIsAngry()
    {
        $people = new People();
        $people->feel(new Angry());
        $this->assertEquals('Oh, I said hello !!!', $people->say("I said hello"));
    }

    public function testSayHelloWhenPeopleIsHappy()
    {
        $people = new People();
        $people->feel(new Happy());
        $this->assertEquals('Hey man, Hello !', $people->say("Hello"));
    }
}
