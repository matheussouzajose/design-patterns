<?php

namespace Structural\Facade\Clients;

class EmailModule
{
    public function validateEmailServer(): bool
    {
        return true;
    }

    public function sendEmail(string $senderName, string $nameRecipient, string $emailRecipient, string $message): bool
    {
        echo "E-mail enviado com sucesso.\n";

        return true;
    }
}
