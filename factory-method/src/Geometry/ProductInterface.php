<?php

namespace Factory\Geometry;

interface ProductInterface
{
    /**
     * @param string $directory
     * @return mixed
     */
    public function setDirectory(string $directory);

    /**
     * @return mixed
     */
    public function getImage();
}
