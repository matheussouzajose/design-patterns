<?php

namespace Structural\Facade\Clients;

class StockControlModule
{
    public function registerWithdrawal(string $bookCode, int $cpf): bool
    {
        return true;
    }

    public function validateStock(string $bookCode): bool
    {
        echo "Registro de retirada efetuado com sucesso.\n";

        return true;
    }
}
