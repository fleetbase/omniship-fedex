<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RatedWeightMethod Enums
 * @subpackage Enumerations
 */
class RatedWeightMethod
{
    /**
     * Constant for value 'ACTUAL'
     * @return string 'ACTUAL'
     */
    const ACTUAL = 'ACTUAL';
    /**
     * Constant for value 'AVERAGE_PACKAGE_WEIGHT_MINIMUM'
     * @return string 'AVERAGE_PACKAGE_WEIGHT_MINIMUM'
     */
    const AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';
    /**
     * Constant for value 'BALLOON'
     * @return string 'BALLOON'
     */
    const BALLOON = 'BALLOON';
    /**
     * Constant for value 'DEFAULT_WEIGHT_APPLIED'
     * @return string 'DEFAULT_WEIGHT_APPLIED'
     */
    const DEFAULT_WEIGHT_APPLIED = 'DEFAULT_WEIGHT_APPLIED';
    /**
     * Constant for value 'DIM'
     * @return string 'DIM'
     */
    const DIM = 'DIM';
    /**
     * Constant for value 'FREIGHT_MINIMUM'
     * @return string 'FREIGHT_MINIMUM'
     */
    const FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';
    /**
     * Constant for value 'MIXED'
     * @return string 'MIXED'
     */
    const MIXED = 'MIXED';
    /**
     * Constant for value 'OVERSIZE'
     * @return string 'OVERSIZE'
     */
    const OVERSIZE = 'OVERSIZE';
    /**
     * Constant for value 'OVERSIZE_1'
     * @return string 'OVERSIZE_1'
     */
    const OVERSIZE_1 = 'OVERSIZE_1';
    /**
     * Constant for value 'OVERSIZE_2'
     * @return string 'OVERSIZE_2'
     */
    const OVERSIZE_2 = 'OVERSIZE_2';
    /**
     * Constant for value 'OVERSIZE_3'
     * @return string 'OVERSIZE_3'
     */
    const OVERSIZE_3 = 'OVERSIZE_3';
    /**
     * Constant for value 'PACKAGING_MINIMUM'
     * @return string 'PACKAGING_MINIMUM'
     */
    const PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';
    /**
     * Constant for value 'WEIGHT_BREAK'
     * @return string 'WEIGHT_BREAK'
     */
    const WEIGHT_BREAK = 'WEIGHT_BREAK';
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
     * @uses self::AVERAGE_PACKAGE_WEIGHT_MINIMUM
     * @uses self::BALLOON
     * @uses self::DEFAULT_WEIGHT_APPLIED
     * @uses self::DIM
     * @uses self::FREIGHT_MINIMUM
     * @uses self::MIXED
     * @uses self::OVERSIZE
     * @uses self::OVERSIZE_1
     * @uses self::OVERSIZE_2
     * @uses self::OVERSIZE_3
     * @uses self::PACKAGING_MINIMUM
     * @uses self::WEIGHT_BREAK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ACTUAL,
            self::AVERAGE_PACKAGE_WEIGHT_MINIMUM,
            self::BALLOON,
            self::DEFAULT_WEIGHT_APPLIED,
            self::DIM,
            self::FREIGHT_MINIMUM,
            self::MIXED,
            self::OVERSIZE,
            self::OVERSIZE_1,
            self::OVERSIZE_2,
            self::OVERSIZE_3,
            self::PACKAGING_MINIMUM,
            self::WEIGHT_BREAK,
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
