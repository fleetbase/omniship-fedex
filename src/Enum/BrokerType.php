<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for BrokerType Enums
 * @subpackage Enumerations
 */
class BrokerType
{
    /**
     * Constant for value 'EXPORT'
     * @return string 'EXPORT'
     */
    const EXPORT = 'EXPORT';
    /**
     * Constant for value 'IMPORT'
     * @return string 'IMPORT'
     */
    const IMPORT = 'IMPORT';
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
     * @uses self::EXPORT
     * @uses self::IMPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::EXPORT,
            self::IMPORT,
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
