<?php

namespace Behavioral\Strategy\Files;

class CompressionRar extends CompressionStrategy
{
    public function compression(string $filePath): bool
    {
        echo 'Arquivo comprimido no formato ".RAR"';
        return true;
    }
}
