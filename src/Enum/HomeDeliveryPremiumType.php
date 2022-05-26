<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HomeDeliveryPremiumType Enums
 * @subpackage Enumerations
 */
class HomeDeliveryPremiumType
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
     * Constant for value 'EVENING'
     * @return string 'EVENING'
     */
    const EVENING = 'EVENING';
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
     * @uses self::EVENING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::APPOINTMENT,
            self::DATE_CERTAIN,
            self::EVENING,
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
