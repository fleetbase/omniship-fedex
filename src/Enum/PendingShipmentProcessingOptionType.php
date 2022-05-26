<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for PendingShipmentProcessingOptionType Enums
 * @subpackage Enumerations
 */
class PendingShipmentProcessingOptionType
{
    /**
     * Constant for value 'ALLOW_MODIFICATIONS'
     * @return string 'ALLOW_MODIFICATIONS'
     */
    const ALLOW_MODIFICATIONS = 'ALLOW_MODIFICATIONS';
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
     * @uses self::ALLOW_MODIFICATIONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ALLOW_MODIFICATIONS,
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
