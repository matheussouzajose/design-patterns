<?php

namespace Structural\Facade\Clients;

class SMSModule
{
    public function generateTokenApi(string $apiKey, string $apiPass): string
    {
        return 'TOKEN_RETORNADO_API';
    }

    public function sendSMS(string $tokenApi, string $senderName, string $nameRecipient, string $phoneRecipient, string $message): bool
    {
        echo "SMS enviado com sucesso.\n";

        return true;
    }
}
