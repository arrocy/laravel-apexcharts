<?php

namespace Arrocy\Apexcharts\Types;

use Arrocy\Apexcharts\Chart;

class PolarArea extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('polarArea');
    }

    public function addPolarAreas(array $data): PolarArea
    {
        return $this->setSeries($data);
    }
}
