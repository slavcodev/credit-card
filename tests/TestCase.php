<?php

namespace LVR\CreditCard\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    // Implement compatibility with new PhpUnit that requires first constructor argument.
    public function __construct($name = null)
    {
        parent::__construct($name ?? get_class($this));
    }
}
