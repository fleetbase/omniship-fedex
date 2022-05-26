<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackDeliveryLocationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The delivery location at the delivered to address.
 * @subpackage Enumerations
 */
class TrackDeliveryLocationType
{
    /**
     * Constant for value 'APARTMENT_OFFICE'
     * @return string 'APARTMENT_OFFICE'
     */
    const APARTMENT_OFFICE = 'APARTMENT_OFFICE';
    /**
     * Constant for value 'FEDEX_LOCATION'
     * @return string 'FEDEX_LOCATION'
     */
    const FEDEX_LOCATION = 'FEDEX_LOCATION';
    /**
     * Constant for value 'GATE_HOUSE'
     * @return string 'GATE_HOUSE'
     */
    const GATE_HOUSE = 'GATE_HOUSE';
    /**
     * Constant for value 'GUARD_OR_SECURITY_STATION'
     * @return string 'GUARD_OR_SECURITY_STATION'
     */
    const GUARD_OR_SECURITY_STATION = 'GUARD_OR_SECURITY_STATION';
    /**
     * Constant for value 'IN_BOND_OR_CAGE'
     * @return string 'IN_BOND_OR_CAGE'
     */
    const IN_BOND_OR_CAGE = 'IN_BOND_OR_CAGE';
    /**
     * Constant for value 'LEASING_OFFICE'
     * @return string 'LEASING_OFFICE'
     */
    const LEASING_OFFICE = 'LEASING_OFFICE';
    /**
     * Constant for value 'MAILROOM'
     * @return string 'MAILROOM'
     */
    const MAILROOM = 'MAILROOM';
    /**
     * Constant for value 'MAIN_OFFICE'
     * @return string 'MAIN_OFFICE'
     */
    const MAIN_OFFICE = 'MAIN_OFFICE';
    /**
     * Constant for value 'MANAGER_OFFICE'
     * @return string 'MANAGER_OFFICE'
     */
    const MANAGER_OFFICE = 'MANAGER_OFFICE';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'PHARMACY'
     * @return string 'PHARMACY'
     */
    const PHARMACY = 'PHARMACY';
    /**
     * Constant for value 'RECEPTIONIST_OR_FRONT_DESK'
     * @return string 'RECEPTIONIST_OR_FRONT_DESK'
     */
    const RECEPTIONIST_OR_FRONT_DESK = 'RECEPTIONIST_OR_FRONT_DESK';
    /**
     * Constant for value 'RENTAL_OFFICE'
     * @return string 'RENTAL_OFFICE'
     */
    const RENTAL_OFFICE = 'RENTAL_OFFICE';
    /**
     * Constant for value 'RESIDENCE'
     * @return string 'RESIDENCE'
     */
    const RESIDENCE = 'RESIDENCE';
    /**
     * Constant for value 'SHIPPING_RECEIVING'
     * @return string 'SHIPPING_RECEIVING'
     */
    const SHIPPING_RECEIVING = 'SHIPPING_RECEIVING';
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
     * @uses self::APARTMENT_OFFICE
     * @uses self::FEDEX_LOCATION
     * @uses self::GATE_HOUSE
     * @uses self::GUARD_OR_SECURITY_STATION
     * @uses self::IN_BOND_OR_CAGE
     * @uses self::LEASING_OFFICE
     * @uses self::MAILROOM
     * @uses self::MAIN_OFFICE
     * @uses self::MANAGER_OFFICE
     * @uses self::OTHER
     * @uses self::PHARMACY
     * @uses self::RECEPTIONIST_OR_FRONT_DESK
     * @uses self::RENTAL_OFFICE
     * @uses self::RESIDENCE
     * @uses self::SHIPPING_RECEIVING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::APARTMENT_OFFICE,
            self::FEDEX_LOCATION,
            self::GATE_HOUSE,
            self::GUARD_OR_SECURITY_STATION,
            self::IN_BOND_OR_CAGE,
            self::LEASING_OFFICE,
            self::MAILROOM,
            self::MAIN_OFFICE,
            self::MANAGER_OFFICE,
            self::OTHER,
            self::PHARMACY,
            self::RECEPTIONIST_OR_FRONT_DESK,
            self::RENTAL_OFFICE,
            self::RESIDENCE,
            self::SHIPPING_RECEIVING,
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
