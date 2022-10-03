<?php

namespace Behavioral\Strategy\Files;

class CompressionTar extends CompressionStrategy
{
    public function compression(string $filePath): bool
    {
        echo 'Arquivo comprimido no formato ".TAR"';
        return true;
    }
}
