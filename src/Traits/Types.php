<?php

namespace Arrocy\Apexcharts\Traits;

use Arrocy\Apexcharts\Types\Area;
use Arrocy\Apexcharts\Types\Bar;
use Arrocy\Apexcharts\Types\Donut;
use Arrocy\Apexcharts\Types\HeatMap;
use Arrocy\Apexcharts\Types\HorizontalBar;
use Arrocy\Apexcharts\Types\Line;
use Arrocy\Apexcharts\Types\Pie;
use Arrocy\Apexcharts\Types\PolarArea;
use Arrocy\Apexcharts\Types\Radar;
use Arrocy\Apexcharts\Types\Radial;

trait Types
{
    public function area(): Area
    {
        return new Area();
    }

    public function bar(): Bar
    {
        return new Bar();
    }

    public function donut(): Donut
    {
        return new Donut();
    }

    public function heatMap(): HeatMap
    {
        return new HeatMap();
    }

    public function horizontalBar(): HorizontalBar
    {
        return new HorizontalBar();
    }

    public function line(): Line
    {
        return new Line();
    }

    public function pie(): Pie
    {
        return new Pie();
    }

    public function polarArea(): PolarArea
    {
        return new PolarArea();
    }

    public function radar(): Radar
    {
        return new Radar();
    }

    public function radial(): Radial
    {
        return new Radial();
    }
}
