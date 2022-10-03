<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Strategy\Files\CompressionContext;
use Behavioral\Strategy\Files\CompressionRar;
use Behavioral\Strategy\Files\CompressionTar;
use Behavioral\Strategy\Files\CompressionZip;

$strategyRar = new CompressionRar();
$strategyZip = new CompressionZip();
$strategyTar = new CompressionTar();

$compressionContext = new CompressionContext($strategyRar);

$compressionContext->compression('CAMINHO/ARQUIVOS');
echo "</br>";

$compressionContext->setCompressionStrategy($strategyZip);
$compressionContext->compression('CAMINHO/ARQUIVOS');
echo "</br>";

$compressionContext->setCompressionStrategy($strategyTar);
$compressionContext->compression('CAMINHO/ARQUIVOS');
echo "</br>";
