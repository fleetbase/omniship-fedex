<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DropoffType Enums
 * @subpackage Enumerations
 */
class DropoffType
{
    /**
     * Constant for value 'BUSINESS_SERVICE_CENTER'
     * @return string 'BUSINESS_SERVICE_CENTER'
     */
    const BUSINESS_SERVICE_CENTER = 'BUSINESS_SERVICE_CENTER';
    /**
     * Constant for value 'DROP_BOX'
     * @return string 'DROP_BOX'
     */
    const DROP_BOX = 'DROP_BOX';
    /**
     * Constant for value 'REGULAR_PICKUP'
     * @return string 'REGULAR_PICKUP'
     */
    const REGULAR_PICKUP = 'REGULAR_PICKUP';
    /**
     * Constant for value 'REQUEST_COURIER'
     * @return string 'REQUEST_COURIER'
     */
    const REQUEST_COURIER = 'REQUEST_COURIER';
    /**
     * Constant for value 'STATION'
     * @return string 'STATION'
     */
    const STATION = 'STATION';
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
     * @uses self::BUSINESS_SERVICE_CENTER
     * @uses self::DROP_BOX
     * @uses self::REGULAR_PICKUP
     * @uses self::REQUEST_COURIER
     * @uses self::STATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BUSINESS_SERVICE_CENTER,
            self::DROP_BOX,
            self::REGULAR_PICKUP,
            self::REQUEST_COURIER,
            self::STATION,
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
