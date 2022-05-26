<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ArrivalLocationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies where a tracking event occurs.
 * @subpackage Enumerations
 */
class ArrivalLocationType
{
    /**
     * Constant for value 'AIRPORT'
     * @return string 'AIRPORT'
     */
    const AIRPORT = 'AIRPORT';
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'CUSTOMS_BROKER'
     * @return string 'CUSTOMS_BROKER'
     */
    const CUSTOMS_BROKER = 'CUSTOMS_BROKER';
    /**
     * Constant for value 'DELIVERY_LOCATION'
     * @return string 'DELIVERY_LOCATION'
     */
    const DELIVERY_LOCATION = 'DELIVERY_LOCATION';
    /**
     * Constant for value 'DESTINATION_AIRPORT'
     * @return string 'DESTINATION_AIRPORT'
     */
    const DESTINATION_AIRPORT = 'DESTINATION_AIRPORT';
    /**
     * Constant for value 'DESTINATION_FEDEX_FACILITY'
     * @return string 'DESTINATION_FEDEX_FACILITY'
     */
    const DESTINATION_FEDEX_FACILITY = 'DESTINATION_FEDEX_FACILITY';
    /**
     * Constant for value 'DROP_BOX'
     * @return string 'DROP_BOX'
     */
    const DROP_BOX = 'DROP_BOX';
    /**
     * Constant for value 'ENROUTE'
     * @return string 'ENROUTE'
     */
    const ENROUTE = 'ENROUTE';
    /**
     * Constant for value 'FEDEX_FACILITY'
     * @return string 'FEDEX_FACILITY'
     */
    const FEDEX_FACILITY = 'FEDEX_FACILITY';
    /**
     * Constant for value 'FEDEX_OFFICE_LOCATION'
     * @return string 'FEDEX_OFFICE_LOCATION'
     */
    const FEDEX_OFFICE_LOCATION = 'FEDEX_OFFICE_LOCATION';
    /**
     * Constant for value 'INTERLINE_CARRIER'
     * @return string 'INTERLINE_CARRIER'
     */
    const INTERLINE_CARRIER = 'INTERLINE_CARRIER';
    /**
     * Constant for value 'NON_FEDEX_FACILITY'
     * @return string 'NON_FEDEX_FACILITY'
     */
    const NON_FEDEX_FACILITY = 'NON_FEDEX_FACILITY';
    /**
     * Constant for value 'ORIGIN_AIRPORT'
     * @return string 'ORIGIN_AIRPORT'
     */
    const ORIGIN_AIRPORT = 'ORIGIN_AIRPORT';
    /**
     * Constant for value 'ORIGIN_FEDEX_FACILITY'
     * @return string 'ORIGIN_FEDEX_FACILITY'
     */
    const ORIGIN_FEDEX_FACILITY = 'ORIGIN_FEDEX_FACILITY';
    /**
     * Constant for value 'PICKUP_LOCATION'
     * @return string 'PICKUP_LOCATION'
     */
    const PICKUP_LOCATION = 'PICKUP_LOCATION';
    /**
     * Constant for value 'PLANE'
     * @return string 'PLANE'
     */
    const PLANE = 'PLANE';
    /**
     * Constant for value 'PORT_OF_ENTRY'
     * @return string 'PORT_OF_ENTRY'
     */
    const PORT_OF_ENTRY = 'PORT_OF_ENTRY';
    /**
     * Constant for value 'SHIP_AND_GET_LOCATION'
     * @return string 'SHIP_AND_GET_LOCATION'
     */
    const SHIP_AND_GET_LOCATION = 'SHIP_AND_GET_LOCATION';
    /**
     * Constant for value 'SORT_FACILITY'
     * @return string 'SORT_FACILITY'
     */
    const SORT_FACILITY = 'SORT_FACILITY';
    /**
     * Constant for value 'TURNPOINT'
     * @return string 'TURNPOINT'
     */
    const TURNPOINT = 'TURNPOINT';
    /**
     * Constant for value 'VEHICLE'
     * @return string 'VEHICLE'
     */
    const VEHICLE = 'VEHICLE';
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
     * @uses self::AIRPORT
     * @uses self::CUSTOMER
     * @uses self::CUSTOMS_BROKER
     * @uses self::DELIVERY_LOCATION
     * @uses self::DESTINATION_AIRPORT
     * @uses self::DESTINATION_FEDEX_FACILITY
     * @uses self::DROP_BOX
     * @uses self::ENROUTE
     * @uses self::FEDEX_FACILITY
     * @uses self::FEDEX_OFFICE_LOCATION
     * @uses self::INTERLINE_CARRIER
     * @uses self::NON_FEDEX_FACILITY
     * @uses self::ORIGIN_AIRPORT
     * @uses self::ORIGIN_FEDEX_FACILITY
     * @uses self::PICKUP_LOCATION
     * @uses self::PLANE
     * @uses self::PORT_OF_ENTRY
     * @uses self::SHIP_AND_GET_LOCATION
     * @uses self::SORT_FACILITY
     * @uses self::TURNPOINT
     * @uses self::VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AIRPORT,
            self::CUSTOMER,
            self::CUSTOMS_BROKER,
            self::DELIVERY_LOCATION,
            self::DESTINATION_AIRPORT,
            self::DESTINATION_FEDEX_FACILITY,
            self::DROP_BOX,
            self::ENROUTE,
            self::FEDEX_FACILITY,
            self::FEDEX_OFFICE_LOCATION,
            self::INTERLINE_CARRIER,
            self::NON_FEDEX_FACILITY,
            self::ORIGIN_AIRPORT,
            self::ORIGIN_FEDEX_FACILITY,
            self::PICKUP_LOCATION,
            self::PLANE,
            self::PORT_OF_ENTRY,
            self::SHIP_AND_GET_LOCATION,
            self::SORT_FACILITY,
            self::TURNPOINT,
            self::VEHICLE,
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
