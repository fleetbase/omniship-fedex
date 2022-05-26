<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RateDiscountType Enums
 * @subpackage Enumerations
 */
class RateDiscountType
{
    /**
     * Constant for value 'BONUS'
     * @return string 'BONUS'
     */
    const BONUS = 'BONUS';
    /**
     * Constant for value 'COUPON'
     * @return string 'COUPON'
     */
    const COUPON = 'COUPON';
    /**
     * Constant for value 'EARNED'
     * @return string 'EARNED'
     */
    const EARNED = 'EARNED';
    /**
     * Constant for value 'OTHER'
     * @return string 'OTHER'
     */
    const OTHER = 'OTHER';
    /**
     * Constant for value 'VOLUME'
     * @return string 'VOLUME'
     */
    const VOLUME = 'VOLUME';
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
     * @uses self::BONUS
     * @uses self::COUPON
     * @uses self::EARNED
     * @uses self::OTHER
     * @uses self::VOLUME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BONUS,
            self::COUPON,
            self::EARNED,
            self::OTHER,
            self::VOLUME,
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
