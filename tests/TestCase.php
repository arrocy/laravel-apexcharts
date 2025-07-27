<?php

namespace Arrocy\Apexcharts\Tests;

use Arrocy\Apexcharts\Facade;
use Arrocy\Apexcharts\Provider;
use Orchestra\Testbench\TestCase as TestBenchTestCase;

class TestCase extends TestBenchTestCase
{
    /**
     * Load the package service provider.
     */
    protected function getPackageProviders($app): array
    {
        return [
            Provider::class,
        ];
    }
}
