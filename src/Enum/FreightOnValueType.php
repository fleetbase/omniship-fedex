<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for FreightOnValueType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies responsibilities with respect to loss, damage, etc.
 * @subpackage Enumerations
 */
class FreightOnValueType
{
    /**
     * Constant for value 'CARRIER_RISK'
     * @return string 'CARRIER_RISK'
     */
    const CARRIER_RISK = 'CARRIER_RISK';
    /**
     * Constant for value 'OWN_RISK'
     * @return string 'OWN_RISK'
     */
    const OWN_RISK = 'OWN_RISK';
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
     * @uses self::CARRIER_RISK
     * @uses self::OWN_RISK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CARRIER_RISK,
            self::OWN_RISK,
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
