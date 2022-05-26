<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SecondaryBarcodeType Enums
 * @subpackage Enumerations
 */
class SecondaryBarcodeType
{
    /**
     * Constant for value 'COMMON_2D'
     * @return string 'COMMON_2D'
     */
    const COMMON_2D = 'COMMON_2D';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const NONE = 'NONE';
    /**
     * Constant for value 'SSCC_18'
     * @return string 'SSCC_18'
     */
    const SSCC_18 = 'SSCC_18';
    /**
     * Constant for value 'USPS'
     * @return string 'USPS'
     */
    const USPS = 'USPS';
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
     * @uses self::COMMON_2D
     * @uses self::NONE
     * @uses self::SSCC_18
     * @uses self::USPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COMMON_2D,
            self::NONE,
            self::SSCC_18,
            self::USPS,
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
