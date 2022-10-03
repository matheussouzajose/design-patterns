<?php

namespace Behavioral\Strategy\Files;

class CompressionContext
{
    private CompressionStrategy $compressionStrategy;

    public function __construct(CompressionStrategy $compressionStrategy)
    {
        $this->compressionStrategy = $compressionStrategy;
    }

    public function setCompressionStrategy(CompressionStrategy $compressionStrategy)
    {
        $this->compressionStrategy = $compressionStrategy;
    }

    public function compression(string $filePath)
    {
        $this->compressionStrategy->compression($filePath);
    }
}
