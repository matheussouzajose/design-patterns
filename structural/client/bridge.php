<?php

require './../../vendor/autoload.php';

use Structural\Bridge\Book\BridgeAuthorTitle;
use Structural\Bridge\Book\LowerImplementor;
use Structural\Bridge\Book\UpperImplementor;
use Structural\Bridge\Book\BridgeTitleAuthor;

$lowerAuthorTitle = new BridgeAuthorTitle("Matheus S. Jose", "Software Enginner", LowerImplementor::class);
$upperTitleAuthor = new BridgeTitleAuthor("Quality Assurance", "Jhuana Lorraine", UpperImplementor::class);

var_dump($lowerAuthorTitle->get());
var_dump($upperTitleAuthor->get());
