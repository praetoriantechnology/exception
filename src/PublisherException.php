<?php

namespace Praetorian\Exception;

use Throwable;

class PublisherException extends PraetorianException
{
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
