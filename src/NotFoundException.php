<?php

namespace Praetorian\Exception;

use Exception;

class NotFoundException extends PraetorianException
{
    public function __construct()
    {
        parent::__construct('Not found', 404);
    }
}
