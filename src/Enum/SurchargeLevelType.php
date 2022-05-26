<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for SurchargeLevelType Enums
 * @subpackage Enumerations
 */
class SurchargeLevelType
{
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
     * @uses self::PACKAGE
     * @uses self::SHIPMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::PACKAGE,
            self::SHIPMENT,
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
