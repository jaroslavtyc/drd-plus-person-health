<?php
namespace DrdPlus\Person\Health;

/**
 * @ORM\Entity
 */
class OrdinaryWound extends Wound
{
    /**
     * @param Health $health
     * @param WoundSize $woundSize
     */
    public function __construct(Health $health, WoundSize $woundSize)
    {
        parent::__construct($health, $woundSize, OrdinaryWoundOrigin::getIt());
    }

    /**
     * @return bool
     */
    public function isSerious()
    {
        return false;
    }

}