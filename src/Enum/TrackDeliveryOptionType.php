<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for TrackDeliveryOptionType Enums
 * @subpackage Enumerations
 */
class TrackDeliveryOptionType
{
    /**
     * Constant for value 'APPOINTMENT'
     * @return string 'APPOINTMENT'
     */
    const APPOINTMENT = 'APPOINTMENT';
    /**
     * Constant for value 'DATE_CERTAIN'
     * @return string 'DATE_CERTAIN'
     */
    const DATE_CERTAIN = 'DATE_CERTAIN';
    /**
     * Constant for value 'ELECTRONIC_SIGNATURE_RELEASE'
     * @return string 'ELECTRONIC_SIGNATURE_RELEASE'
     */
    const ELECTRONIC_SIGNATURE_RELEASE = 'ELECTRONIC_SIGNATURE_RELEASE';
    /**
     * Constant for value 'EVENING'
     * @return string 'EVENING'
     */
    const EVENING = 'EVENING';
    /**
     * Constant for value 'REDIRECT_TO_HOLD_AT_LOCATION'
     * @return string 'REDIRECT_TO_HOLD_AT_LOCATION'
     */
    const REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
    /**
     * Constant for value 'REROUTE'
     * @return string 'REROUTE'
     */
    const REROUTE = 'REROUTE';
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
     * @uses self::APPOINTMENT
     * @uses self::DATE_CERTAIN
     * @uses self::ELECTRONIC_SIGNATURE_RELEASE
     * @uses self::EVENING
     * @uses self::REDIRECT_TO_HOLD_AT_LOCATION
     * @uses self::REROUTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::APPOINTMENT,
            self::DATE_CERTAIN,
            self::ELECTRONIC_SIGNATURE_RELEASE,
            self::EVENING,
            self::REDIRECT_TO_HOLD_AT_LOCATION,
            self::REROUTE,
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
