<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PickupRequestType Enums
 * @subpackage Enumerations
 */
class PickupRequestType
{
    /**
     * Constant for value 'FUTURE_DAY'
     * @return string 'FUTURE_DAY'
     */
    const FUTURE_DAY = 'FUTURE_DAY';
    /**
     * Constant for value 'SAME_DAY'
     * @return string 'SAME_DAY'
     */
    const SAME_DAY = 'SAME_DAY';
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
     * @uses self::FUTURE_DAY
     * @uses self::SAME_DAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FUTURE_DAY,
            self::SAME_DAY,
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
