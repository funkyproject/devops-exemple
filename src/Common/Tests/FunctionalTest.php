<?php
namespace FDJ\Common\Tests;

use Symfony\Component\Process\Process;

/**
 * Class FunctionalTest
 * @package FDJ\Common\Tests
 * @group functional
 */
class FunctionalTest extends \PHPUnit_Framework_TestCase
{
    public function testPharShouldSayHelloWorld()
    {
        $process = new Process("php hello-world.phar", __DIR__.'/../../../build/');

         $process->run();

        if($process->isSuccessful()) {
            $this->assertEquals("Hello world", $process->getOutput());
        } else {
            $this->fail($process->getErrorOutput());
        }



    }
}
