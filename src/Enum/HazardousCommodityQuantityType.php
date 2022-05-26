<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HazardousCommodityQuantityType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the measure of quantity to be validated against a prescribed limit.
 * @subpackage Enumerations
 */
class HazardousCommodityQuantityType
{
    /**
     * Constant for value 'GROSS'
     * @return string 'GROSS'
     */
    const GROSS = 'GROSS';
    /**
     * Constant for value 'NET'
     * @return string 'NET'
     */
    const NET = 'NET';
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
     * @uses self::GROSS
     * @uses self::NET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::GROSS,
            self::NET,
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
