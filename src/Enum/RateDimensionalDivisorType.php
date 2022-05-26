<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RateDimensionalDivisorType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the reason that a dim divisor value was chose.
 * @subpackage Enumerations
 */
class RateDimensionalDivisorType
{
    /**
     * Constant for value 'COUNTRY'
     * @return string 'COUNTRY'
     */
    const COUNTRY = 'COUNTRY';
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'PRODUCT'
     * @return string 'PRODUCT'
     */
    const PRODUCT = 'PRODUCT';
    /**
     * Constant for value 'WAIVED'
     * @return string 'WAIVED'
     */
    const WAIVED = 'WAIVED';
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
     * @uses self::COUNTRY
     * @uses self::CUSTOMER
     * @uses self::OTHER
     * @uses self::PRODUCT
     * @uses self::WAIVED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COUNTRY,
            self::CUSTOMER,
            self::OTHER,
            self::PRODUCT,
            self::WAIVED,
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
