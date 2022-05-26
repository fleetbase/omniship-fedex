<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for DocTabContentType Enums
 * @subpackage Enumerations
 */
class DocTabContentType
{
    /**
     * Constant for value 'BARCODED'
     * @return string 'BARCODED'
     */
    const BARCODED = 'BARCODED';
    /**
     * Constant for value 'CUSTOM'
     * @return string 'CUSTOM'
     */
    const CUSTOM = 'CUSTOM';
    /**
     * Constant for value 'MINIMUM'
     * @return string 'MINIMUM'
     */
    const MINIMUM = 'MINIMUM';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const STANDARD = 'STANDARD';
    /**
     * Constant for value 'ZONE001'
     * @return string 'ZONE001'
     */
    const ZONE001 = 'ZONE001';
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
     * @uses self::BARCODED
     * @uses self::CUSTOM
     * @uses self::MINIMUM
     * @uses self::STANDARD
     * @uses self::ZONE001
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BARCODED,
            self::CUSTOM,
            self::MINIMUM,
            self::STANDARD,
            self::ZONE001,
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
