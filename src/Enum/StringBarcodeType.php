<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for StringBarcodeType Enums
 * @subpackage Enumerations
 */
class StringBarcodeType
{
    /**
     * Constant for value 'ADDRESS'
     * @return string 'ADDRESS'
     */
    const ADDRESS = 'ADDRESS';
    /**
     * Constant for value 'ASTRA'
     * @return string 'ASTRA'
     */
    const ASTRA = 'ASTRA';
    /**
     * Constant for value 'FEDEX_1D'
     * @return string 'FEDEX_1D'
     */
    const FEDEX_1D = 'FEDEX_1D';
    /**
     * Constant for value 'GROUND'
     * @return string 'GROUND'
     */
    const GROUND = 'GROUND';
    /**
     * Constant for value 'POSTAL'
     * @return string 'POSTAL'
     */
    const POSTAL = 'POSTAL';
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
     * @uses self::ADDRESS
     * @uses self::ASTRA
     * @uses self::FEDEX_1D
     * @uses self::GROUND
     * @uses self::POSTAL
     * @uses self::USPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ADDRESS,
            self::ASTRA,
            self::FEDEX_1D,
            self::GROUND,
            self::POSTAL,
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
