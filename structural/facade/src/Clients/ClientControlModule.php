<?php

namespace Structural\Facade\Clients;

class ClientControlModule
{
    public function getClient(int $cpf): array
    {
        return [
          'name' => 'Matheus S. Jose',
          'phone' => '999999999',
          'email' => 'matheus.jose@gmail.com.br'
        ];
    }
}
