<?php

namespace Praetorian\Exception;

use Exception;

class InvalidPromotionException extends Exception
{
    public function __construct()
    {
        parent::__construct('Invalid promotion.');
    }
}
