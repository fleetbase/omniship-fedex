<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DeliveryOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the different option types for delivery.
 * @subpackage Enumerations
 */
class DeliveryOptionType
{
    /**
     * Constant for value 'INDIRECT_SIGNATURE_RELEASE'
     * @return string 'INDIRECT_SIGNATURE_RELEASE'
     */
    const INDIRECT_SIGNATURE_RELEASE = 'INDIRECT_SIGNATURE_RELEASE';
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
     * Constant for value 'RESCHEDULE'
     * @return string 'RESCHEDULE'
     */
    const RESCHEDULE = 'RESCHEDULE';
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
     * @uses self::INDIRECT_SIGNATURE_RELEASE
     * @uses self::REDIRECT_TO_HOLD_AT_LOCATION
     * @uses self::REROUTE
     * @uses self::RESCHEDULE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::INDIRECT_SIGNATURE_RELEASE,
            self::REDIRECT_TO_HOLD_AT_LOCATION,
            self::REROUTE,
            self::RESCHEDULE,
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
