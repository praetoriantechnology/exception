<?php

namespace Praetorian\Exception;
use Exception;

class CashoutForbiddenException extends Exception
{
    private const MESSAGE = 'Cashout forbidden';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }
}
