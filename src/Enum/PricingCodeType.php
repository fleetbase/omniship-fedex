<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PricingCodeType Enums
 * @subpackage Enumerations
 */
class PricingCodeType
{
    /**
     * Constant for value 'ACTUAL'
     * @return string 'ACTUAL'
     */
    const ACTUAL = 'ACTUAL';
    /**
     * Constant for value 'ALTERNATE'
     * @return string 'ALTERNATE'
     */
    const ALTERNATE = 'ALTERNATE';
    /**
     * Constant for value 'BASE'
     * @return string 'BASE'
     */
    const BASE = 'BASE';
    /**
     * Constant for value 'HUNDREDWEIGHT'
     * @return string 'HUNDREDWEIGHT'
     */
    const HUNDREDWEIGHT = 'HUNDREDWEIGHT';
    /**
     * Constant for value 'HUNDREDWEIGHT_ALTERNATE'
     * @return string 'HUNDREDWEIGHT_ALTERNATE'
     */
    const HUNDREDWEIGHT_ALTERNATE = 'HUNDREDWEIGHT_ALTERNATE';
    /**
     * Constant for value 'INTERNATIONAL_DISTRIBUTION'
     * @return string 'INTERNATIONAL_DISTRIBUTION'
     */
    const INTERNATIONAL_DISTRIBUTION = 'INTERNATIONAL_DISTRIBUTION';
    /**
     * Constant for value 'INTERNATIONAL_ECONOMY_SERVICE'
     * @return string 'INTERNATIONAL_ECONOMY_SERVICE'
     */
    const INTERNATIONAL_ECONOMY_SERVICE = 'INTERNATIONAL_ECONOMY_SERVICE';
    /**
     * Constant for value 'LTL_FREIGHT'
     * @return string 'LTL_FREIGHT'
     */
    const LTL_FREIGHT = 'LTL_FREIGHT';
    /**
     * Constant for value 'PACKAGE'
     * @return string 'PACKAGE'
     */
    const PACKAGE = 'PACKAGE';
    /**
     * Constant for value 'SHIPMENT'
     * @return string 'SHIPMENT'
     */
    const SHIPMENT = 'SHIPMENT';
    /**
     * Constant for value 'SHIPMENT_FIVE_POUND_OPTIONAL'
     * @return string 'SHIPMENT_FIVE_POUND_OPTIONAL'
     */
    const SHIPMENT_FIVE_POUND_OPTIONAL = 'SHIPMENT_FIVE_POUND_OPTIONAL';
    /**
     * Constant for value 'SHIPMENT_OPTIONAL'
     * @return string 'SHIPMENT_OPTIONAL'
     */
    const SHIPMENT_OPTIONAL = 'SHIPMENT_OPTIONAL';
    /**
     * Constant for value 'SPECIAL'
     * @return string 'SPECIAL'
     */
    const SPECIAL = 'SPECIAL';
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
     * @uses self::ACTUAL
     * @uses self::ALTERNATE
     * @uses self::BASE
     * @uses self::HUNDREDWEIGHT
     * @uses self::HUNDREDWEIGHT_ALTERNATE
     * @uses self::INTERNATIONAL_DISTRIBUTION
     * @uses self::INTERNATIONAL_ECONOMY_SERVICE
     * @uses self::LTL_FREIGHT
     * @uses self::PACKAGE
     * @uses self::SHIPMENT
     * @uses self::SHIPMENT_FIVE_POUND_OPTIONAL
     * @uses self::SHIPMENT_OPTIONAL
     * @uses self::SPECIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ACTUAL,
            self::ALTERNATE,
            self::BASE,
            self::HUNDREDWEIGHT,
            self::HUNDREDWEIGHT_ALTERNATE,
            self::INTERNATIONAL_DISTRIBUTION,
            self::INTERNATIONAL_ECONOMY_SERVICE,
            self::LTL_FREIGHT,
            self::PACKAGE,
            self::SHIPMENT,
            self::SHIPMENT_FIVE_POUND_OPTIONAL,
            self::SHIPMENT_OPTIONAL,
            self::SPECIAL,
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
