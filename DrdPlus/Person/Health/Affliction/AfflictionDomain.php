<?php
namespace DrdPlus\Person\Health\Affliction;

use Doctrineum\String\StringEnum;
use DrdPlus\Codes\AfflictionByWoundCodes;

class AfflictionDomain extends StringEnum
{
    const AFFLICTION_DOMAIN = 'affliction_domain';

    /**
     * @return AfflictionDomain
     */
    public static function getPhysicalAffliction()
    {
        return static::getEnum(AfflictionByWoundCodes::PHYSICAL);
    }

    /**
     * @return AfflictionDomain
     */
    public static function getPsychicalAffliction()
    {
        return static::getEnum(AfflictionByWoundCodes::PSYCHICAL);
    }

    protected static function convertToEnumFinalValue($enumValue)
    {
        $finalValue = parent::convertToEnumFinalValue($enumValue);
        if (!in_array($finalValue, AfflictionByWoundCodes::getAfflictionDomainCodes(), true)) {
            throw new \LogicException('unexpected affliction domain');
        }
    }

}