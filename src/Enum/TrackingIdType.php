<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackingIdType Enums
 * @subpackage Enumerations
 */
class TrackingIdType
{
    /**
     * Constant for value 'EXPRESS'
     * @return string 'EXPRESS'
     */
    const EXPRESS = 'EXPRESS';
    /**
     * Constant for value 'FEDEX'
     * @return string 'FEDEX'
     */
    const FEDEX = 'FEDEX';
    /**
     * Constant for value 'GROUND'
     * @return string 'GROUND'
     */
    const GROUND = 'GROUND';
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
     * @uses self::EXPRESS
     * @uses self::FEDEX
     * @uses self::GROUND
     * @uses self::USPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EXPRESS,
            self::FEDEX,
            self::GROUND,
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
