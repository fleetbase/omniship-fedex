<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FedExLocationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a kind of FedEx facility.
 * @subpackage Enumerations
 */
class FedExLocationType
{
    /**
     * Constant for value 'FEDEX_EXPRESS_STATION'
     * @return string 'FEDEX_EXPRESS_STATION'
     */
    const FEDEX_EXPRESS_STATION = 'FEDEX_EXPRESS_STATION';
    /**
     * Constant for value 'FEDEX_FACILITY'
     * @return string 'FEDEX_FACILITY'
     */
    const FEDEX_FACILITY = 'FEDEX_FACILITY';
    /**
     * Constant for value 'FEDEX_FREIGHT_SERVICE_CENTER'
     * @return string 'FEDEX_FREIGHT_SERVICE_CENTER'
     */
    const FEDEX_FREIGHT_SERVICE_CENTER = 'FEDEX_FREIGHT_SERVICE_CENTER';
    /**
     * Constant for value 'FEDEX_GROUND_TERMINAL'
     * @return string 'FEDEX_GROUND_TERMINAL'
     */
    const FEDEX_GROUND_TERMINAL = 'FEDEX_GROUND_TERMINAL';
    /**
     * Constant for value 'FEDEX_HOME_DELIVERY_STATION'
     * @return string 'FEDEX_HOME_DELIVERY_STATION'
     */
    const FEDEX_HOME_DELIVERY_STATION = 'FEDEX_HOME_DELIVERY_STATION';
    /**
     * Constant for value 'FEDEX_OFFICE'
     * @return string 'FEDEX_OFFICE'
     */
    const FEDEX_OFFICE = 'FEDEX_OFFICE';
    /**
     * Constant for value 'FEDEX_SHIPSITE'
     * @return string 'FEDEX_SHIPSITE'
     */
    const FEDEX_SHIPSITE = 'FEDEX_SHIPSITE';
    /**
     * Constant for value 'FEDEX_SMART_POST_HUB'
     * @return string 'FEDEX_SMART_POST_HUB'
     */
    const FEDEX_SMART_POST_HUB = 'FEDEX_SMART_POST_HUB';
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
     * @uses self::FEDEX_EXPRESS_STATION
     * @uses self::FEDEX_FACILITY
     * @uses self::FEDEX_FREIGHT_SERVICE_CENTER
     * @uses self::FEDEX_GROUND_TERMINAL
     * @uses self::FEDEX_HOME_DELIVERY_STATION
     * @uses self::FEDEX_OFFICE
     * @uses self::FEDEX_SHIPSITE
     * @uses self::FEDEX_SMART_POST_HUB
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::FEDEX_EXPRESS_STATION,
            self::FEDEX_FACILITY,
            self::FEDEX_FREIGHT_SERVICE_CENTER,
            self::FEDEX_GROUND_TERMINAL,
            self::FEDEX_HOME_DELIVERY_STATION,
            self::FEDEX_OFFICE,
            self::FEDEX_SHIPSITE,
            self::FEDEX_SMART_POST_HUB,
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
