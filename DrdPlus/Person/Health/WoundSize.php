<?php
namespace DrdPlus\Person\Health;

use Granam\Integer\IntegerObject;
use Granam\Tools\ValueDescriber;

class WoundSize extends IntegerObject
{
    public function __construct($value)
    {
        try {
            parent::__construct($value);
        } catch (\Granam\Integer\Tools\Exceptions\Exception $conversionException) {
            throw new Exceptions\WoundValueCanNotBeNegative(
                'Expected integer as a wound value, got ' . ValueDescriber::describe($value),
                $conversionException->getCode(),
                $conversionException
            );
        }

        if ($this->getValue() < 0) {
            throw new Exceptions\WoundValueCanNotBeNegative(
                'Expected at least zero, got ' . ValueDescriber::describe($value)
            );
        }
    }
}