<?php

namespace Maropost\Api\InputTypes;

class KeyValue
{
    /**
     * @var string
     */
    public $key;
    public $value;

    public function __construct(string $key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}