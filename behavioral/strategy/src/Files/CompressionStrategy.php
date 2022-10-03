<?php

namespace Behavioral\Strategy\Files;

abstract class CompressionStrategy
{
    public function renameFilesInOrdem()
    {
        echo 'Arquivos nomeados';
    }

    abstract public function compression(string $filePath): bool;
}
