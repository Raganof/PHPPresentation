<?php

namespace PhpOffice\PhpPresentation\Writer\ODPresentation;

use PhpOffice\PhpPresentation\SlideShape\Chart;

abstract class AbstractDecoratorWriter extends \PhpOffice\PhpPresentation\Writer\AbstractDecoratorWriter
{
    /**
     * @var Chart[]
     */
    protected $arrayChart;

    /**
     * @return \PhpOffice\PhpPresentation\SlideShape\Chart[]
     */
    public function getArrayChart()
    {
        return $this->arrayChart;
    }

    /**
     * @param \PhpOffice\PhpPresentation\SlideShape\Chart[] $arrayChart
     * @return AbstractDecoratorWriter
     */
    public function setArrayChart($arrayChart)
    {
        $this->arrayChart = $arrayChart;
        return $this;
    }
}
