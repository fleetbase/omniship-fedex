<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightChargeBasisType Enums
 * @subpackage Enumerations
 */
class FreightChargeBasisType
{
    /**
     * Constant for value 'CWT'
     * @return string 'CWT'
     */
    const CWT = 'CWT';
    /**
     * Constant for value 'FLAT'
     * @return string 'FLAT'
     */
    const FLAT = 'FLAT';
    /**
     * Constant for value 'MINIMUM'
     * @return string 'MINIMUM'
     */
    const MINIMUM = 'MINIMUM';
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
     * @uses self::CWT
     * @uses self::FLAT
     * @uses self::MINIMUM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CWT,
            self::FLAT,
            self::MINIMUM,
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
