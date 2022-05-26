<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CustomDeliveryWindowType Enums
 * @subpackage Enumerations
 */
class CustomDeliveryWindowType
{
    /**
     * Constant for value 'AFTER'
     * @return string 'AFTER'
     */
    const AFTER = 'AFTER';
    /**
     * Constant for value 'BEFORE'
     * @return string 'BEFORE'
     */
    const BEFORE = 'BEFORE';
    /**
     * Constant for value 'BETWEEN'
     * @return string 'BETWEEN'
     */
    const BETWEEN = 'BETWEEN';
    /**
     * Constant for value 'ON'
     * @return string 'ON'
     */
    const ON = 'ON';
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
     * @uses self::AFTER
     * @uses self::BEFORE
     * @uses self::BETWEEN
     * @uses self::ON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::AFTER,
            self::BEFORE,
            self::BETWEEN,
            self::ON,
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
