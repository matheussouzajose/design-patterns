<?php

namespace Structural\Facade\Clients;

class LibraryFacade
{
    public function withdraw(string $bookCode, string $cpf): bool
    {
        $stockControlModule = new StockControlModule();

        if (!$stockControlModule->validateStock($bookCode)) {
            throw new \Exception('Estoque indisponível');
        }

        return $stockControlModule->registerWithdrawal($bookCode, $cpf);
    }

    public function sendMessages(string $bookCode, string $cpf, string $apiKey, string $apiPass): bool
    {
        $clientControlModule = new ClientControlModule();
        $smsModule = new SMSModule();
        $emailModule = new EmailModule();

        $client = $clientControlModule->getClient($cpf);

        if ($emailModule->validateEmailServer()) {
            $emailModule->sendEmail(
                'Biblitoca de teste',
                $client['name'],
                $client['email'],
                "Aluguel de livro de código {$bookCode} efetuado com sucesso!"
            );
        }

        $token = $smsModule->generateTokenApi($apiKey, $apiPass);
        $smsModule->sendSMS(
            $token,
            'Biblitoca de teste',
            $client['name'],
            $client['phone'],
            "Aluguel de livro de código {$bookCode} efetuado com sucesso!"
        );

        return true;
    }
}
