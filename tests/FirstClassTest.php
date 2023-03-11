<?php

namespace TheOwaisAzam\OwaisCalculator\Tests;

use PHPUnit\Framework\TestCase;
use TheOwaisAzam\OwaisCalculator\FirstClass;

class FirstClassTest extends TestCase
{
    /** @test */
    public function function_should_return_true()
    {
        $bool = FirstClass::returnTrue();
        $this->assertTrue($bool);
    }
}
