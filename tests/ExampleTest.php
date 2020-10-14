<?php

namespace Impact\Resistance\Tests;

use Orchestra\Testbench\TestCase;
use Impact\Resistance\ResistanceServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ResistanceServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
