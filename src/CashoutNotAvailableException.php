<?php

namespace Praetorian\Exception;

class CashoutNotAvailableException extends PraetorianException
{
    private const MESSAGE = 'Cashout not available';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }
}
