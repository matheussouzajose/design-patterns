<?php

namespace Creation\Factory\Geometry;

class Circle implements ProductInterface
{
    /**
     * @var string
     */
    private string $directory;

    /**
     * @param string $directory
     * @return void
     */
    public function setDirectory(string $directory)
    {
        $this->directory = $directory;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->directory . '/circle.png';
    }
}
