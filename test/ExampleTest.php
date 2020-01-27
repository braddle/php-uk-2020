<?php
namespace Braddle;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testBoolean()
    {
        $example = new Example();

        $this->assertTrue($example->getTrue());
        $this->assertFalse($example->getFalse());
    }

}