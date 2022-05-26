<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PhysicalFormType Enums
 * @subpackage Enumerations
 */
class PhysicalFormType
{
    /**
     * Constant for value 'GAS'
     * @return string 'GAS'
     */
    const GAS = 'GAS';
    /**
     * Constant for value 'LIQUID'
     * @return string 'LIQUID'
     */
    const LIQUID = 'LIQUID';
    /**
     * Constant for value 'SOLID'
     * @return string 'SOLID'
     */
    const SOLID = 'SOLID';
    /**
     * Constant for value 'SPECIAL'
     * @return string 'SPECIAL'
     */
    const SPECIAL = 'SPECIAL';
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
     * @uses self::GAS
     * @uses self::LIQUID
     * @uses self::SOLID
     * @uses self::SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::GAS,
            self::LIQUID,
            self::SOLID,
            self::SPECIAL,
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
