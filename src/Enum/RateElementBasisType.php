<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RateElementBasisType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Selects the value from a set of rate data to which the percentage is applied.
 * @subpackage Enumerations
 */
class RateElementBasisType
{
    /**
     * Constant for value 'BASE_CHARGE'
     * @return string 'BASE_CHARGE'
     */
    const BASE_CHARGE = 'BASE_CHARGE';
    /**
     * Constant for value 'NET_CHARGE'
     * @return string 'NET_CHARGE'
     */
    const NET_CHARGE = 'NET_CHARGE';
    /**
     * Constant for value 'NET_CHARGE_EXCLUDING_TAXES'
     * @return string 'NET_CHARGE_EXCLUDING_TAXES'
     */
    const NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';
    /**
     * Constant for value 'NET_FREIGHT'
     * @return string 'NET_FREIGHT'
     */
    const NET_FREIGHT = 'NET_FREIGHT';
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
     * @uses self::BASE_CHARGE
     * @uses self::NET_CHARGE
     * @uses self::NET_CHARGE_EXCLUDING_TAXES
     * @uses self::NET_FREIGHT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BASE_CHARGE,
            self::NET_CHARGE,
            self::NET_CHARGE_EXCLUDING_TAXES,
            self::NET_FREIGHT,
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
