<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PickupType Enums
 * @subpackage Enum
 */
class PickupType
{
    /**
     * Constant for value 'CONTACT_FEDEX_TO_SCHEDULE'
     * @return string 'CONTACT_FEDEX_TO_SCHEDULE'
     */
    public const CONTACT_FEDEX_TO_SCHEDULE = 'CONTACT_FEDEX_TO_SCHEDULE';
    /**
     * Constant for value 'DROPOFF_AT_FEDEX_LOCATION'
     * @return string 'DROPOFF_AT_FEDEX_LOCATION'
     */
    public const DROPOFF_AT_FEDEX_LOCATION = 'DROPOFF_AT_FEDEX_LOCATION';
    /**
     * Constant for value 'USE_SCHEDULED_PICKUP'
     * @return string 'USE_SCHEDULED_PICKUP'
     */
    public const USE_SCHEDULED_PICKUP = 'USE_SCHEDULED_PICKUP';
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
     * @uses self::CONTACT_FEDEX_TO_SCHEDULE
     * @uses self::DROPOFF_AT_FEDEX_LOCATION
     * @uses self::USE_SCHEDULED_PICKUP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CONTACT_FEDEX_TO_SCHEDULE,
            self::DROPOFF_AT_FEDEX_LOCATION,
            self::USE_SCHEDULED_PICKUP,
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
