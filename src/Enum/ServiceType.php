<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ServiceType Enums
 * @subpackage Enumerations
 */
class ServiceType
{
    /**
     * Constant for value 'EUROPE_FIRST_INTERNATIONAL_PRIORITY'
     * @return string 'EUROPE_FIRST_INTERNATIONAL_PRIORITY'
     */
    const EUROPE_FIRST_INTERNATIONAL_PRIORITY = 'EUROPE_FIRST_INTERNATIONAL_PRIORITY';
    /**
     * Constant for value 'FEDEX_1_DAY_FREIGHT'
     * @return string 'FEDEX_1_DAY_FREIGHT'
     */
    const FEDEX_1_DAY_FREIGHT = 'FEDEX_1_DAY_FREIGHT';
    /**
     * Constant for value 'FEDEX_2_DAY'
     * @return string 'FEDEX_2_DAY'
     */
    const FEDEX_2_DAY = 'FEDEX_2_DAY';
    /**
     * Constant for value 'FEDEX_2_DAY_AM'
     * @return string 'FEDEX_2_DAY_AM'
     */
    const FEDEX_2_DAY_AM = 'FEDEX_2_DAY_AM';
    /**
     * Constant for value 'FEDEX_2_DAY_FREIGHT'
     * @return string 'FEDEX_2_DAY_FREIGHT'
     */
    const FEDEX_2_DAY_FREIGHT = 'FEDEX_2_DAY_FREIGHT';
    /**
     * Constant for value 'FEDEX_3_DAY_FREIGHT'
     * @return string 'FEDEX_3_DAY_FREIGHT'
     */
    const FEDEX_3_DAY_FREIGHT = 'FEDEX_3_DAY_FREIGHT';
    /**
     * Constant for value 'FEDEX_DISTANCE_DEFERRED'
     * @return string 'FEDEX_DISTANCE_DEFERRED'
     */
    const FEDEX_DISTANCE_DEFERRED = 'FEDEX_DISTANCE_DEFERRED';
    /**
     * Constant for value 'FEDEX_EXPRESS_SAVER'
     * @return string 'FEDEX_EXPRESS_SAVER'
     */
    const FEDEX_EXPRESS_SAVER = 'FEDEX_EXPRESS_SAVER';
    /**
     * Constant for value 'FEDEX_FIRST_FREIGHT'
     * @return string 'FEDEX_FIRST_FREIGHT'
     */
    const FEDEX_FIRST_FREIGHT = 'FEDEX_FIRST_FREIGHT';
    /**
     * Constant for value 'FEDEX_FREIGHT_ECONOMY'
     * @return string 'FEDEX_FREIGHT_ECONOMY'
     */
    const FEDEX_FREIGHT_ECONOMY = 'FEDEX_FREIGHT_ECONOMY';
    /**
     * Constant for value 'FEDEX_FREIGHT_PRIORITY'
     * @return string 'FEDEX_FREIGHT_PRIORITY'
     */
    const FEDEX_FREIGHT_PRIORITY = 'FEDEX_FREIGHT_PRIORITY';
    /**
     * Constant for value 'FEDEX_GROUND'
     * @return string 'FEDEX_GROUND'
     */
    const FEDEX_GROUND = 'FEDEX_GROUND';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_AFTERNOON'
     * @return string 'FEDEX_NEXT_DAY_AFTERNOON'
     */
    const FEDEX_NEXT_DAY_AFTERNOON = 'FEDEX_NEXT_DAY_AFTERNOON';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_EARLY_MORNING'
     * @return string 'FEDEX_NEXT_DAY_EARLY_MORNING'
     */
    const FEDEX_NEXT_DAY_EARLY_MORNING = 'FEDEX_NEXT_DAY_EARLY_MORNING';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_END_OF_DAY'
     * @return string 'FEDEX_NEXT_DAY_END_OF_DAY'
     */
    const FEDEX_NEXT_DAY_END_OF_DAY = 'FEDEX_NEXT_DAY_END_OF_DAY';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_FREIGHT'
     * @return string 'FEDEX_NEXT_DAY_FREIGHT'
     */
    const FEDEX_NEXT_DAY_FREIGHT = 'FEDEX_NEXT_DAY_FREIGHT';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_MID_MORNING'
     * @return string 'FEDEX_NEXT_DAY_MID_MORNING'
     */
    const FEDEX_NEXT_DAY_MID_MORNING = 'FEDEX_NEXT_DAY_MID_MORNING';
    /**
     * Constant for value 'FIRST_OVERNIGHT'
     * @return string 'FIRST_OVERNIGHT'
     */
    const FIRST_OVERNIGHT = 'FIRST_OVERNIGHT';
    /**
     * Constant for value 'GROUND_HOME_DELIVERY'
     * @return string 'GROUND_HOME_DELIVERY'
     */
    const GROUND_HOME_DELIVERY = 'GROUND_HOME_DELIVERY';
    /**
     * Constant for value 'INTERNATIONAL_ECONOMY'
     * @return string 'INTERNATIONAL_ECONOMY'
     */
    const INTERNATIONAL_ECONOMY = 'INTERNATIONAL_ECONOMY';
    /**
     * Constant for value 'INTERNATIONAL_ECONOMY_FREIGHT'
     * @return string 'INTERNATIONAL_ECONOMY_FREIGHT'
     */
    const INTERNATIONAL_ECONOMY_FREIGHT = 'INTERNATIONAL_ECONOMY_FREIGHT';
    /**
     * Constant for value 'INTERNATIONAL_FIRST'
     * @return string 'INTERNATIONAL_FIRST'
     */
    const INTERNATIONAL_FIRST = 'INTERNATIONAL_FIRST';
    /**
     * Constant for value 'INTERNATIONAL_PRIORITY'
     * @return string 'INTERNATIONAL_PRIORITY'
     */
    const INTERNATIONAL_PRIORITY = 'INTERNATIONAL_PRIORITY';
    /**
     * Constant for value 'INTERNATIONAL_PRIORITY_FREIGHT'
     * @return string 'INTERNATIONAL_PRIORITY_FREIGHT'
     */
    const INTERNATIONAL_PRIORITY_FREIGHT = 'INTERNATIONAL_PRIORITY_FREIGHT';
    /**
     * Constant for value 'PRIORITY_OVERNIGHT'
     * @return string 'PRIORITY_OVERNIGHT'
     */
    const PRIORITY_OVERNIGHT = 'PRIORITY_OVERNIGHT';
    /**
     * Constant for value 'SAME_DAY'
     * @return string 'SAME_DAY'
     */
    const SAME_DAY = 'SAME_DAY';
    /**
     * Constant for value 'SAME_DAY_CITY'
     * @return string 'SAME_DAY_CITY'
     */
    const SAME_DAY_CITY = 'SAME_DAY_CITY';
    /**
     * Constant for value 'SMART_POST'
     * @return string 'SMART_POST'
     */
    const SMART_POST = 'SMART_POST';
    /**
     * Constant for value 'STANDARD_OVERNIGHT'
     * @return string 'STANDARD_OVERNIGHT'
     */
    const STANDARD_OVERNIGHT = 'STANDARD_OVERNIGHT';
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
     * @uses self::EUROPE_FIRST_INTERNATIONAL_PRIORITY
     * @uses self::FEDEX_1_DAY_FREIGHT
     * @uses self::FEDEX_2_DAY
     * @uses self::FEDEX_2_DAY_AM
     * @uses self::FEDEX_2_DAY_FREIGHT
     * @uses self::FEDEX_3_DAY_FREIGHT
     * @uses self::FEDEX_DISTANCE_DEFERRED
     * @uses self::FEDEX_EXPRESS_SAVER
     * @uses self::FEDEX_FIRST_FREIGHT
     * @uses self::FEDEX_FREIGHT_ECONOMY
     * @uses self::FEDEX_FREIGHT_PRIORITY
     * @uses self::FEDEX_GROUND
     * @uses self::FEDEX_NEXT_DAY_AFTERNOON
     * @uses self::FEDEX_NEXT_DAY_EARLY_MORNING
     * @uses self::FEDEX_NEXT_DAY_END_OF_DAY
     * @uses self::FEDEX_NEXT_DAY_FREIGHT
     * @uses self::FEDEX_NEXT_DAY_MID_MORNING
     * @uses self::FIRST_OVERNIGHT
     * @uses self::GROUND_HOME_DELIVERY
     * @uses self::INTERNATIONAL_ECONOMY
     * @uses self::INTERNATIONAL_ECONOMY_FREIGHT
     * @uses self::INTERNATIONAL_FIRST
     * @uses self::INTERNATIONAL_PRIORITY
     * @uses self::INTERNATIONAL_PRIORITY_FREIGHT
     * @uses self::PRIORITY_OVERNIGHT
     * @uses self::SAME_DAY
     * @uses self::SAME_DAY_CITY
     * @uses self::SMART_POST
     * @uses self::STANDARD_OVERNIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EUROPE_FIRST_INTERNATIONAL_PRIORITY,
            self::FEDEX_1_DAY_FREIGHT,
            self::FEDEX_2_DAY,
            self::FEDEX_2_DAY_AM,
            self::FEDEX_2_DAY_FREIGHT,
            self::FEDEX_3_DAY_FREIGHT,
            self::FEDEX_DISTANCE_DEFERRED,
            self::FEDEX_EXPRESS_SAVER,
            self::FEDEX_FIRST_FREIGHT,
            self::FEDEX_FREIGHT_ECONOMY,
            self::FEDEX_FREIGHT_PRIORITY,
            self::FEDEX_GROUND,
            self::FEDEX_NEXT_DAY_AFTERNOON,
            self::FEDEX_NEXT_DAY_EARLY_MORNING,
            self::FEDEX_NEXT_DAY_END_OF_DAY,
            self::FEDEX_NEXT_DAY_FREIGHT,
            self::FEDEX_NEXT_DAY_MID_MORNING,
            self::FIRST_OVERNIGHT,
            self::GROUND_HOME_DELIVERY,
            self::INTERNATIONAL_ECONOMY,
            self::INTERNATIONAL_ECONOMY_FREIGHT,
            self::INTERNATIONAL_FIRST,
            self::INTERNATIONAL_PRIORITY,
            self::INTERNATIONAL_PRIORITY_FREIGHT,
            self::PRIORITY_OVERNIGHT,
            self::SAME_DAY,
            self::SAME_DAY_CITY,
            self::SMART_POST,
            self::STANDARD_OVERNIGHT,
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
