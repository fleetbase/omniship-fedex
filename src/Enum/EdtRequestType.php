<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for EdtRequestType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the types of Estimated Duties and Taxes to be included in a rate quotation for an international shipment.
 * @subpackage Enumerations
 */
class EdtRequestType
{
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const ALL = 'ALL';
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
     * @uses self::ALL
     * @uses self::NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::ALL,
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
