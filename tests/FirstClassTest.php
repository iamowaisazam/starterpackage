<?php

namespace OwaisAzam\StarterPackage\Tests;

use PHPUnit\Framework\TestCase;
use OwaisAzam\StarterPackage\StarterPackage;

class FirstClassTest extends TestCase
{

    /** @test */
    public function function_should_return_true()
    {

        $data = ['1','2','3','4'];
        $app = new StarterPackage();

        $response = $app->array_to_string($data);

        echo "\n";
        echo $response;
        echo "\n";

        $this->assertTrue(true);
        
    }
}


?>