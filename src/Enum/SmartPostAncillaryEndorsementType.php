<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SmartPostAncillaryEndorsementType Enums
 * Meta informations extracted from the WSDL
 * - documentation: These values are mutually exclusive; at most one of them can be attached to a SmartPost shipment.
 * @subpackage Enumerations
 */
class SmartPostAncillaryEndorsementType
{
    /**
     * Constant for value 'ADDRESS_CORRECTION'
     * @return string 'ADDRESS_CORRECTION'
     */
    const ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';
    /**
     * Constant for value 'CARRIER_LEAVE_IF_NO_RESPONSE'
     * @return string 'CARRIER_LEAVE_IF_NO_RESPONSE'
     */
    const CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';
    /**
     * Constant for value 'CHANGE_SERVICE'
     * @return string 'CHANGE_SERVICE'
     */
    const CHANGE_SERVICE = 'CHANGE_SERVICE';
    /**
     * Constant for value 'FORWARDING_SERVICE'
     * @return string 'FORWARDING_SERVICE'
     */
    const FORWARDING_SERVICE = 'FORWARDING_SERVICE';
    /**
     * Constant for value 'RETURN_SERVICE'
     * @return string 'RETURN_SERVICE'
     */
    const RETURN_SERVICE = 'RETURN_SERVICE';
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
     * @uses self::ADDRESS_CORRECTION
     * @uses self::CARRIER_LEAVE_IF_NO_RESPONSE
     * @uses self::CHANGE_SERVICE
     * @uses self::FORWARDING_SERVICE
     * @uses self::RETURN_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ADDRESS_CORRECTION,
            self::CARRIER_LEAVE_IF_NO_RESPONSE,
            self::CHANGE_SERVICE,
            self::FORWARDING_SERVICE,
            self::RETURN_SERVICE,
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
