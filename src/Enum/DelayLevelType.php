<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DelayLevelType Enums
 * Meta informations extracted from the WSDL
 * - documentation: The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
 * @subpackage Enumerations
 */
class DelayLevelType
{
    /**
     * Constant for value 'CITY'
     * @return string 'CITY'
     */
    const CITY = 'CITY';
    /**
     * Constant for value 'COUNTRY'
     * @return string 'COUNTRY'
     */
    const COUNTRY = 'COUNTRY';
    /**
     * Constant for value 'LOCATION'
     * @return string 'LOCATION'
     */
    const LOCATION = 'LOCATION';
    /**
     * Constant for value 'POSTAL_CODE'
     * @return string 'POSTAL_CODE'
     */
    const POSTAL_CODE = 'POSTAL_CODE';
    /**
     * Constant for value 'SERVICE_AREA'
     * @return string 'SERVICE_AREA'
     */
    const SERVICE_AREA = 'SERVICE_AREA';
    /**
     * Constant for value 'SERVICE_AREA_SPECIAL_SERVICE'
     * @return string 'SERVICE_AREA_SPECIAL_SERVICE'
     */
    const SERVICE_AREA_SPECIAL_SERVICE = 'SERVICE_AREA_SPECIAL_SERVICE';
    /**
     * Constant for value 'SPECIAL_SERVICE'
     * @return string 'SPECIAL_SERVICE'
     */
    const SPECIAL_SERVICE = 'SPECIAL_SERVICE';
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
     * @uses self::CITY
     * @uses self::COUNTRY
     * @uses self::LOCATION
     * @uses self::POSTAL_CODE
     * @uses self::SERVICE_AREA
     * @uses self::SERVICE_AREA_SPECIAL_SERVICE
     * @uses self::SPECIAL_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CITY,
            self::COUNTRY,
            self::LOCATION,
            self::POSTAL_CODE,
            self::SERVICE_AREA,
            self::SERVICE_AREA_SPECIAL_SERVICE,
            self::SPECIAL_SERVICE,
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
