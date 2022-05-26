<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RateRequestType Enums
 * @subpackage Enumerations
 */
class RateRequestType
{
    /**
     * Constant for value 'LIST'
     * @return string 'LIST'
     */
    const LIST = 'LIST';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const NONE = 'NONE';
    /**
     * Constant for value 'PREFERRED'
     * @return string 'PREFERRED'
     */
    const PREFERRED = 'PREFERRED';
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
     * @uses self::LIST
     * @uses self::NONE
     * @uses self::PREFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::LIST,
            self::NONE,
            self::PREFERRED,
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
