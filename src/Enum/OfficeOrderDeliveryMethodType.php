<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for OfficeOrderDeliveryMethodType Enums
 * @subpackage Enumerations
 */
class OfficeOrderDeliveryMethodType
{
    /**
     * Constant for value 'COURIER'
     * @return string 'COURIER'
     */
    const COURIER = 'COURIER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'PICKUP'
     * @return string 'PICKUP'
     */
    const PICKUP = 'PICKUP';
    /**
     * Constant for value 'SHIPMENT'
     * @return string 'SHIPMENT'
     */
    const SHIPMENT = 'SHIPMENT';
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
     * @uses self::COURIER
     * @uses self::OTHER
     * @uses self::PICKUP
     * @uses self::SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COURIER,
            self::OTHER,
            self::PICKUP,
            self::SHIPMENT,
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
