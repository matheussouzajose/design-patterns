<?php

require './../../vendor/autoload.php';

use Structural\Facade\Clients\LibraryFacade;

$libraryFacade = new LibraryFacade();

$bookCode = '1';
$cpf = '1234567879123';

try {
    $withdraw = $libraryFacade->withdraw($bookCode, $cpf);

    if ($withdraw) {
        $libraryFacade->sendMessages($bookCode, $cpf, 'API_KEY', 'API_PASS');
    }
} catch (Exception $e) {
}
