<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for OversizeClassType Enums
 * @subpackage Enumerations
 */
class OversizeClassType
{
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
     * @uses self::OVERSIZE_1
     * @uses self::OVERSIZE_2
     * @uses self::OVERSIZE_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::OVERSIZE_1,
            self::OVERSIZE_2,
            self::OVERSIZE_3,
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
