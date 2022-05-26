<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for RateTypeBasisType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Select the type of rate from which the element is to be selected.
 * @subpackage Enumerations
 */
class RateTypeBasisType
{
    /**
     * Constant for value 'ACCOUNT'
     * @return string 'ACCOUNT'
     */
    const ACCOUNT = 'ACCOUNT';
    /**
     * Constant for value 'LIST'
     * @return string 'LIST'
     */
    const LIST = 'LIST';
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
     * @uses self::ACCOUNT
     * @uses self::LIST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ACCOUNT,
            self::LIST,
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
