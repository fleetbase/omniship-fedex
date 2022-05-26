<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for MinimumChargeType Enums
 * @subpackage Enumerations
 */
class MinimumChargeType
{
    /**
     * Constant for value 'CUSTOMER'
     * @return string 'CUSTOMER'
     */
    const CUSTOMER = 'CUSTOMER';
    /**
     * Constant for value 'CUSTOMER_FREIGHT_WEIGHT'
     * @return string 'CUSTOMER_FREIGHT_WEIGHT'
     */
    const CUSTOMER_FREIGHT_WEIGHT = 'CUSTOMER_FREIGHT_WEIGHT';
    /**
     * Constant for value 'EARNED_DISCOUNT'
     * @return string 'EARNED_DISCOUNT'
     */
    const EARNED_DISCOUNT = 'EARNED_DISCOUNT';
    /**
     * Constant for value 'MIXED'
     * @return string 'MIXED'
     */
    const MIXED = 'MIXED';
    /**
     * Constant for value 'RATE_SCALE'
     * @return string 'RATE_SCALE'
     */
    const RATE_SCALE = 'RATE_SCALE';
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
     * @uses self::CUSTOMER
     * @uses self::CUSTOMER_FREIGHT_WEIGHT
     * @uses self::EARNED_DISCOUNT
     * @uses self::MIXED
     * @uses self::RATE_SCALE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CUSTOMER,
            self::CUSTOMER_FREIGHT_WEIGHT,
            self::EARNED_DISCOUNT,
            self::MIXED,
            self::RATE_SCALE,
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
