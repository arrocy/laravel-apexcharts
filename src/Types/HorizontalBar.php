<?php

namespace Arrocy\Apexcharts\Types;

use Arrocy\Apexcharts\Chart;
use Illuminate\Support\Collection;

class HorizontalBar extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->setType('bar');

        $this->setHorizontal(true);
    }

    public function addBar(string $name, array|Collection $data): HorizontalBar
    {
        $type = $this->getType();

        return $this->setDataset($name, $type, $data);
    }
}
