<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for ShippingDocumentEMailGroupingType Enums
 * @subpackage Enumerations
 */
class ShippingDocumentEMailGroupingType
{
    /**
     * Constant for value 'BY_RECIPIENT'
     * @return string 'BY_RECIPIENT'
     */
    const BY_RECIPIENT = 'BY_RECIPIENT';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const NONE = 'NONE';
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
     * @uses self::BY_RECIPIENT
     * @uses self::NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::BY_RECIPIENT,
            self::NONE,
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
