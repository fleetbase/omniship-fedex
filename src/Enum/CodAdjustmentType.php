<?php

namespace Omniship\FedEx\Enum;

/**
 * This class stands for CodAdjustmentType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of adjustment was performed to the COD collection amount during rating.
 * @subpackage Enumerations
 */
class CodAdjustmentType
{
    /**
     * Constant for value 'CHARGES_ADDED'
     * @return string 'CHARGES_ADDED'
     */
    const CHARGES_ADDED = 'CHARGES_ADDED';
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
     * @uses self::CHARGES_ADDED
     * @uses self::NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::CHARGES_ADDED,
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
