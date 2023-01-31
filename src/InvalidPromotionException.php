<?php

namespace Praetorian\Exception;

class InvalidPromotionException extends PraetorianException
{
    public function __construct()
    {
        parent::__construct('Invalid promotion.');
    }
}
