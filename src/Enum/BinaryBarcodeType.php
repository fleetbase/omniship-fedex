<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for BinaryBarcodeType Enums
 * @subpackage Enumerations
 */
class BinaryBarcodeType
{
    /**
     * Constant for value 'COMMON_2D'
     * @return string 'COMMON_2D'
     */
    const COMMON_2D = 'COMMON_2D';
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
     * @uses self::COMMON_2D
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::COMMON_2D,
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
