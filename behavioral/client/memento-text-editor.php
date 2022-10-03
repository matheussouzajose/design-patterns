<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\Memento\TextEditor\Text;

$text = new Text();

$text->writeText('A');
$text->writeText('B');
$text->writeText('C');

echo $text->returnText();
echo "</br>";

$text->undoWriting();

echo $text->returnText();
echo "</br>";
