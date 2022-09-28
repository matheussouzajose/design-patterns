<?php

require __DIR__ . "/../../vendor/autoload.php";

use Behavioral\ChainOfResponsabity\After;
use Behavioral\ChainOfResponsabity\Before;
use Behavioral\ChainOfResponsabity\Handler;
use Behavioral\ChainOfResponsabity\Request;

$before = new Before();
$request = new Request();
$after = new After();

$auth = new class extends Handler {
    public function execute()
    {
        var_dump('autenticação');
    }
};

$auth->successor($before);
$before->successor($request);
$request->successor($after);

$auth->handlerRequest();

//$next = $auth;

//while ($next) {
//    $next->handlerRequest();
//    $next = $next->next();
//}
