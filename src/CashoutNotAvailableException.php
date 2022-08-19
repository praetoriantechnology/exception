<?php

namespace Praetorian\Exception;
use Exception;

class CashoutNotAvailableException extends Exception
{
    private const MESSAGE = 'Cashout not available';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }
}
