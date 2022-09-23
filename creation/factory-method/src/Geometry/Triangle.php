<?php

namespace Creation\Factory\Geometry;

class Triangle implements ProductInterface
{
    /**
     * @var string
     */
    private string $directory = '/root/';

    /**
     * @param string $directory
     * @return mixed|void
     */
    public function setDirectory(string $directory)
    {
        $this->directory .= $directory;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->directory . '/triangle.png';
    }
}
