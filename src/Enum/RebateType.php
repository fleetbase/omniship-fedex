<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RebateType Enums
 * @subpackage Enumerations
 */
class RebateType
{
    /**
     * Constant for value 'BONUS'
     * @return string 'BONUS'
     */
    const BONUS = 'BONUS';
    /**
     * Constant for value 'EARNED'
     * @return string 'EARNED'
     */
    const EARNED = 'EARNED';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
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
     * @uses self::BONUS
     * @uses self::EARNED
     * @uses self::OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BONUS,
            self::EARNED,
            self::OTHER,
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
