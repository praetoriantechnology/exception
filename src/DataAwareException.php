<?php

namespace Praetorian\Exception;

use Exception;

class DataAwareException extends Exception
{
    protected array $data;

    public function __construct($message = '', array $data = [])
    {
        parent::__construct($message);
        $this->setData($data);
    }

    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->data;
    }
}
