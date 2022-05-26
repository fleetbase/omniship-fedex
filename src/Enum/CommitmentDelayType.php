<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CommitmentDelayType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The type of delay this shipment will encounter.
 * @subpackage Enumerations
 */
class CommitmentDelayType
{
    /**
     * Constant for value 'HOLIDAY'
     * @return string 'HOLIDAY'
     */
    const HOLIDAY = 'HOLIDAY';
    /**
     * Constant for value 'NON_WORKDAY'
     * @return string 'NON_WORKDAY'
     */
    const NON_WORKDAY = 'NON_WORKDAY';
    /**
     * Constant for value 'NO_CITY_DELIVERY'
     * @return string 'NO_CITY_DELIVERY'
     */
    const NO_CITY_DELIVERY = 'NO_CITY_DELIVERY';
    /**
     * Constant for value 'NO_HOLD_AT_LOCATION'
     * @return string 'NO_HOLD_AT_LOCATION'
     */
    const NO_HOLD_AT_LOCATION = 'NO_HOLD_AT_LOCATION';
    /**
     * Constant for value 'NO_LOCATION_DELIVERY'
     * @return string 'NO_LOCATION_DELIVERY'
     */
    const NO_LOCATION_DELIVERY = 'NO_LOCATION_DELIVERY';
    /**
     * Constant for value 'NO_SERVICE_AREA_DELIVERY'
     * @return string 'NO_SERVICE_AREA_DELIVERY'
     */
    const NO_SERVICE_AREA_DELIVERY = 'NO_SERVICE_AREA_DELIVERY';
    /**
     * Constant for value 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY'
     * @return string 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY'
     */
    const NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY = 'NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY';
    /**
     * Constant for value 'NO_SPECIAL_SERVICE_DELIVERY'
     * @return string 'NO_SPECIAL_SERVICE_DELIVERY'
     */
    const NO_SPECIAL_SERVICE_DELIVERY = 'NO_SPECIAL_SERVICE_DELIVERY';
    /**
     * Constant for value 'NO_ZIP_DELIVERY'
     * @return string 'NO_ZIP_DELIVERY'
     */
    const NO_ZIP_DELIVERY = 'NO_ZIP_DELIVERY';
    /**
     * Constant for value 'WEEKEND'
     * @return string 'WEEKEND'
     */
    const WEEKEND = 'WEEKEND';
    /**
     * Constant for value 'WEEKEND_SPECIAL'
     * @return string 'WEEKEND_SPECIAL'
     */
    const WEEKEND_SPECIAL = 'WEEKEND_SPECIAL';
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
     * @uses self::HOLIDAY
     * @uses self::NON_WORKDAY
     * @uses self::NO_CITY_DELIVERY
     * @uses self::NO_HOLD_AT_LOCATION
     * @uses self::NO_LOCATION_DELIVERY
     * @uses self::NO_SERVICE_AREA_DELIVERY
     * @uses self::NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY
     * @uses self::NO_SPECIAL_SERVICE_DELIVERY
     * @uses self::NO_ZIP_DELIVERY
     * @uses self::WEEKEND
     * @uses self::WEEKEND_SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::HOLIDAY,
            self::NON_WORKDAY,
            self::NO_CITY_DELIVERY,
            self::NO_HOLD_AT_LOCATION,
            self::NO_LOCATION_DELIVERY,
            self::NO_SERVICE_AREA_DELIVERY,
            self::NO_SERVICE_AREA_SPECIAL_SERVICE_DELIVERY,
            self::NO_SPECIAL_SERVICE_DELIVERY,
            self::NO_ZIP_DELIVERY,
            self::WEEKEND,
            self::WEEKEND_SPECIAL,
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
