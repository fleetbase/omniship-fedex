<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for LiabilityCoverageType Enums
 * @subpackage Enumerations
 */
class LiabilityCoverageType
{
    /**
     * Constant for value 'NEW'
     * @return string 'NEW'
     */
    const NEW = 'NEW';
    /**
     * Constant for value 'USED_OR_RECONDITIONED'
     * @return string 'USED_OR_RECONDITIONED'
     */
    const USED_OR_RECONDITIONED = 'USED_OR_RECONDITIONED';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::NEW
     * @uses self::USED_OR_RECONDITIONED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::NEW,
            self::USED_OR_RECONDITIONED,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
