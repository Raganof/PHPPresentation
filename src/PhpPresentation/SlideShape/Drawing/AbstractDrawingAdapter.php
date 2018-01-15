<?php

namespace PhpOffice\PhpPresentation\SlideShape\Drawing;

use PhpOffice\PhpPresentation\SlideShape\AbstractGraphic;

abstract class AbstractDrawingAdapter extends AbstractGraphic
{
    /**
     * @return string
     */
    abstract public function getContents();

    /**
     * @return string
     */
    abstract public function getExtension();

    /**
     * @return string
     */
    abstract public function getIndexedFilename();

    /**
     * @return string
     */
    abstract public function getMimeType();
}
