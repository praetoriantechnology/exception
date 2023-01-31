<?php

namespace Praetorian\Exception;

class DataAwareException extends PraetorianException
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
