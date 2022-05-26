<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for HazardousCommodityLabelTextOptionType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how the commodity is to be labeled.
 * @subpackage Enumerations
 */
class HazardousCommodityLabelTextOptionType
{
    /**
     * Constant for value 'APPEND'
     * @return string 'APPEND'
     */
    const APPEND = 'APPEND';
    /**
     * Constant for value 'OVERRIDE'
     * @return string 'OVERRIDE'
     */
    const OVERRIDE = 'OVERRIDE';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const STANDARD = 'STANDARD';
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
     * @uses self::APPEND
     * @uses self::OVERRIDE
     * @uses self::STANDARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::APPEND,
            self::OVERRIDE,
            self::STANDARD,
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
