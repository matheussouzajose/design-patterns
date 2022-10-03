<?php

namespace Behavioral\Strategy\Files;

class CompressionZip extends CompressionStrategy
{
    public function compression(string $filePath): bool
    {
        echo 'Arquivo comprimido no formato ".ZIP"';
        return true;
    }
}
