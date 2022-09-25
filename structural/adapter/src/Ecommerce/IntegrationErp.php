<?php

namespace Structural\Adapter\Ecommerce;

class IntegrationErp
{
    public function token(string $apiKey): string
    {
        return 'TOKEN_GERADO_VIA_API';
    }

    public function order(array $order, string $apiKey): bool
    {
        return true;
    }
}
