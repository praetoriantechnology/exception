<?php

namespace Praetorian\Exception;

class CashoutForbiddenException extends PraetorianException
{
    private const MESSAGE = 'Cashout forbidden';

    public function __construct()
    {
        parent::__construct(self::MESSAGE);
    }
}
